<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <!-- <script src="https://cdn.jsdelivr.net/npm/luxon@3.4.3/build/global/luxon.min.js"></script> -->
  <script src="../public/js/luxon.min.js"></script>
  <script>
    window.addEventListener("DOMContentLoaded", (event) => {
      console.log("hola");

      function formatearAUTC(fecha) {
        console.log("fechautc");
        console.log(fecha);
        const year = fecha.year;
        const month = String(fecha.month + 1).padStart(2, '0');
        const day = String(fecha.day).padStart(2, '0');
        const hours = String(fecha.hour).padStart(2, '0');
        const minutes = String(fecha.minute).padStart(2, '0');
        const seconds = String(fecha.second).padStart(2, '0');
        return `${year}-${month}-${day} ${hours}:${minutes}:${seconds}`;
      }

      function formatFecha(fechaUTC) {

        const anio = fechaUTC.year;
        const mes = fechaUTC.month;
        const dia = fechaUTC.day;
        const hora = fechaUTC.hour;
        const minutos = fechaUTC.minute;
        const segundos = fechaUTC.second;

        console.log('Año:', anio);
        console.log('Mes:', mes);
        console.log('Día:', dia);
        console.log('Hora:', hora);
        console.log('Minutos:', minutos);
        console.log('Segundos:', segundos);



      }




      //let horaaux = new Date("2023-09-25 22:55:53");
      //convertUTCDateToLocalDate(horaaux);

      var elementosHora = document.getElementsByClassName(".hora");

      // elementosHora es una colección de elementos con la clase "hora"
      // Puedes recorrerlos o acceder a elementos específicos por índice
      //const moment = window.moment;
      for (var i = 0; i < elementosHora.length; i++) {
        //console.log(elementosHora[i].textContent);
        let hora = elementosHora[i].textContent;
        console.log("hora----");
        console.log(hora);
        //let horaC = convt(new Date(hora));
        //console.log("elemento");
        var DateTime = luxon.DateTime;
        //let horaAH = String('2017-05-15 09:24:15');
        let horaAH = String(hora);

        let fechaUTC = DateTime.fromSQL(horaAH, {
          zone: 'utc'
        });
        formatFecha(fechaUTC);
        let fecha = formatearAUTC(fechaUTC.toLocal());
        console.log(fecha);



        //console.log(fechaUTC.toISO());
      }
    });
  </script>
  <?php
  //date_default_timezone_set('America/Montevideo');
  date_default_timezone_set('UTC');
  $currentDateTime = date('Y-m-d H:i:s');
  echo "La fecha y hora actual en UTC es: $currentDateTime"; ?>
  <p class=".hora"><?= $currentDateTime; ?></p>

</body>

</html>