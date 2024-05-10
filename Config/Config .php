<?php 
	const BASE_URL = "https://craftzcoffee.com";

	//Zona horaria
	date_default_timezone_set('America/Nicaragua');

    const DB_HOST = "localhost";
	const DB_NAME = "u129156288_db_virtualshop";
	const DB_USER = "u129156288_craftzcofee";
	const DB_PASSWORD = "@Poetadebarro123";
	const DB_CHARSET = "utf8";

	//Para envío de correo
	const ENVIRONMENT = 1; // Local: 0, Produccón: 1;

	//Deliminadores decimal y millar Ej. 24,1989.00
	const SPD = ".";
	const SPM = ",";

	//Simbolo de moneda
	const SMONEY = "$";
	const CURRENCY = "USD";

	//Api PayPal
	//SANDBOX PAYPAL
	const URLPAYPAL = "https://api-m.sandbox.paypal.com";
	const IDCLIENTE = "";
	const SECRET = "";
	//LIVE PAYPAL
	//const URLPAYPAL = "https://api-m.paypal.com";
	//const IDCLIENTE = "";
	//const SECRET = "";

	//Datos envio de correo
	const NOMBRE_REMITENTE = "Virtual Store";
	const EMAIL_REMITENTE = "info@craftzcoffee.com";
	const NOMBRE_EMPESA = "Virtual Store";
	const WEB_EMPRESA = "www.craftzcoffee.com";

	const DESCRIPCION = "La mejor tienda en línea con artículos de calidad y al mejor precio.";
	const SHAREDHASH = "VirtualStore";

	//Datos Empresa
	const DIRECCION = "Km 35 carretera panamericana norte. Bo.Marvin Salazar Unto Me international, Managua, Nicaragua";
	const TELEMPRESA = "+(505) 81637193";
	const WHATSAPP = "+505 81637193";
	const EMAIL_EMPRESA = "info@craftzcoffee.com";
	const EMAIL_PEDIDOS = "info@craftzcoffee.com"; 
	const EMAIL_SUSCRIPCION = "info@craftzcoffee.com";
	const EMAIL_CONTACTO = "info@craftzcoffee.com";

	const CAT_SLIDER = "1,2,3";
	const CAT_BANNER = "4,5,6";
	const CAT_FOOTER = "1,2,3,4,5";

	//Datos para Encriptar / Desencriptar
	const KEY = 'craftzcoffee';
	const METHODENCRIPT = "AES-128-ECB";

	//Envío
	const COSTOENVIO = 5;

	//Módulos
	const MDASHBOARD = 1;
	const MUSUARIOS = 2;
	const MCLIENTES = 3;
	const MPRODUCTOS = 4;
	const MPEDIDOS = 5;
	const MCATEGORIAS = 6;
	const MSUSCRIPTORES = 7;
	const MDCONTACTOS = 8;
	const MDPAGINAS = 9;

	//Páginas
	const PINICIO = 1;
	const PTIENDA = 2;
	const PCARRITO = 3;
	const PNOSOTROS = 4;
	const PCONTACTO = 5;
	const PPREGUNTAS = 6;
	const PTERMINOS = 7;
	const PSUCURSALES = 8;
	const PERROR = 9;

	//Roles
	const RADMINISTRADOR = 1;
	const RSUPERVISOR = 2;
	const RCLIENTES = 3;

	const STATUS = array('Completo','Aprobado','Cancelado','Reembolsado','Pendiente','Entregado');

	//Productos por página
	const CANTPORDHOME = 8;
	const PROPORPAGINA = 4;
	const PROCATEGORIA = 4;
	const PROBUSCAR = 4;

	//REDES SOCIALES
	const FACEBOOK = "https://www.facebook.com/profile.php?id=100081319592240";
	const INSTAGRAM = "https://www.instagram.com/craftxdog/";
	

 ?>
