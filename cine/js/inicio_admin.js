window.onload = function () {
    console.log("cargando gerentes");

    let url = 'getGerentes.php'; //donde voy a buscar
    fetch(url)//funcion fetch, busca recurso/respuesta, en este caso la url, pero no recargara la pagina
        //javascript llama a lo siguiente funciones asincronicas
        .then(function (response) //cuando llegue la respuesta del servidor se ejecuta esto, el then recibe como parametro una funcion anonima que seria la respuesta en este caso. y con la respuesta recibida hace algo
        {
            return response.json(); //de esta respuesta devuelve un json
        }).then(function (data) //tambien devuelve una promesa, este then contiene una funciona anonima con la data en formato json
        {
            console.log(data);

            let tbody = document.querySelector("table#tabla_gerentes>tbody") //utilizo el id de la tabla
            //valido que el body exista
            if (!tbody) {
                throw new Error("No existe el elemento table#tabla_gerentes>tbody")
            }

            for (let usuario of data) //for each que recorre y crea tablas
            {
                let tr = document.createElement('tr');

                let td = document.createElement('td');
                td.innerText = usuario.nombre;
                tr.appendChild(td);

                td = document.createElement('td');
                td.innerText = usuario.apellido;
                tr.appendChild(td);

                td = document.createElement('td');
                td.innerText = usuario.email;
                tr.appendChild(td);

                td = document.createElement('td');
                td.innerText = usuario.nro_telefono;
                tr.appendChild(td);

                td = document.createElement('td');
                td.innerText = usuario.fecha_nacimiento;
                tr.appendChild(td);


                td = document.createElement('td');
                td.innerText = usuario.genero;
                tr.appendChild(td);

                td = document.createElement('td');
                let aEditar = document.createElement('a');
                aEditar.setAttribute('href', 'editar_gerente.php?id=' + usuario.id_usuario);
                aEditar.classList.add('btn', 'btn-primary');
                aEditar.innerText = 'Editar';
                td.appendChild(aEditar);
                tr.appendChild(td);

                td = document.createElement('td');
                let aEliminar = document.createElement('a');
                aEliminar.setAttribute('href', 'eliminar_gerente.php?id=' + usuario.id_usuario);
                aEliminar.classList.add('btn', 'btn-danger');
                aEliminar.innerText = 'Eliminar';
                td.appendChild(aEliminar);
                tr.appendChild(td);

                tbody.appendChild(tr);
            }

        }).catch(function (error) {
            console.log("Fallo el fetch");
            console.log(error);
        });
};  
