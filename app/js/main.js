'use strict';

const newCarForm = document.getElementById('newCar');
const patenteInput = document.getElementById('patente');
const error1 = document.getElementById('error1');
const error2 = document.getElementById('error2');
const anio = document.getElementById('year');
const insertVehicule = document.getElementById('vehiculeResult');
const getCars = document.getElementById('getCars');
const showcars = document.getElementById('showAll');
let validarPatente;
let validarYear;

newCarForm.addEventListener('submit', (e) => {
    e.preventDefault();
    let data = new FormData(newCarForm);

    let patente = data.get('patente');
    let serialMotor = data.get('serialMotor');
    let serialCarroceria = data.get('serialCarroceria');
    let marca = data.get('marca');
    let modelo = data.get('modelo');
    let year = data.get('year');
    let color = data.get('color');
    let precio = data.get('precio');

    if(patente.length<7){
        patenteInput.classList.add('formError');
        error1.innerHTML = 'Ingrese un valor valido';
        validarPatente = false;
    }else{
        patenteInput.classList.remove('formError');
        error1.innerHTML = '';
        validarPatente = true;
    }

    if(year.length<4 || year>2021){
        anio.classList.add('formError');
        error2.innerHTML = 'Ingrese un año valido';
        validarYear = false;
    }else{
        anio.classList.remove('formError');
        error2.innerHTML = '';
        validarYear = true;
    }

    if(validarPatente && validarYear){
        fetch('../app/controllers/createNewCar.php', {
            method: 'POST',
            body: data
        })
        .then(res => res.text())
        .then( text => {
            let auto = JSON.parse(text);
            console.log(auto);
            insertVehicule.innerHTML = auto;
        })
        .catch( err => {
            console.log(err);
        })
    }else{
        console.log('Error de data');
    }
});

getCars.addEventListener('click', (e) => {
    fetch('../app/controllers/getCars.php', {
        method: 'GET'
    })
    .then(res => res.text())
    .then( text => {
        let autos = JSON.parse(text);
        console.log(autos);
        
        autos.forEach(auto => {
            showcars.innerHTML += `
            <tr>
                <td>`+ auto.id +`</td>
                <td> <button type="submit" value="`+ auto.id +`"><i class='bx bx-edit-alt'></i></button></td>
                <td> <button type="submit"><i class='bx bx-trash'></i></button></td>
                <td>` + auto.patente +`</td>
                <td>` + auto.serial_motor +`</td>
                <td>` + auto.serial_carroceria +`</td>
                <td>` + auto.marca +`</td>
                <td>` + auto.modelo +`</td>
                <td>` + auto.year +`</td>
                <td>` + auto.color +`</td>
                <td>` + auto.precio +`</td>
            </tr>
            `
        });
    })
})