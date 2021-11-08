 function vista_previa_admin(argument) {
  let cantidad_usuarios =
    document.querySelector(
      ".admin_targetas .cantidad_usuarios"
    );
  let cantidad_anuncios =
    document.querySelector(
      ".admin_targetas .cantidad_anuncios"
    );
  let cantidad_marcas =
    document.querySelector(
      ".admin_targetas .cantidad_marcas"
    );
  let cantidad_modelos =
    document.querySelector(
      ".admin_targetas .cantidad_modelos"
    );

  function get_cantidades_admin(argument) {
    $.getJSON('server/admin/cantidades.php', {
      fun: 'get_cantidades_admin'
    }, function(json, textStatus) {


      console.log(json);
      console.log(json["anuncio_cantidad"]);
      console.log(json["marca_cantidad"]);
      console.log(json["modelo_cantidad"]);
      cantidad_anuncios.textContent = json["anuncio_cantidad"];
      cantidad_marcas.textContent = json["marca_cantidad"];
      cantidad_modelos.textContent = json["modelo_cantidad"];
      // console.log(json);
      // console.log(json);
      // console.log(json);
      // console.log(json);


    });
  }
  get_cantidades_admin();
 }