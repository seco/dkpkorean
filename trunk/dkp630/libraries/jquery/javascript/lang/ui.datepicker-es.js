/* French initialisation for the jQuery UI date picker plugin. */
/* Written by Keith Wood (kbwood@iprimus.com.au) and Stéphane Nahmani (sholby@sholby.net). */
jQuery(function($){
	$.datepicker.regional['es'] = {clearText: 'Claro', clearStatus: '',
		closeText: 'Cerrar', closeStatus: 'Cerrar sin modificar',
		prevText: '&lt;Anterior', prevStatus: 'Ver el mes anterior',
		nextText: 'Siguiente&gt;', nextStatus: 'Ver el mes siguiente',
		currentText: 'Actual', currentStatus: 'Ver el mes actual',
		monthNames: ['Enero','Febrero','Marzo','Abril','Mayo','Junio',
		'Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		monthNamesShort: ['Ene','Feb','Mar','Abr','May','Jun',
		'Jul','Ago','Sep','Oct','Nov','Dic'],
		monthStatus: 'Ver otro mes', yearStatus: 'Ver otro año',
		weekHeader: 'Sm', weekStatus: '',
		dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
		dayNamesShort: ['Dom','Lun','Mar','Mie','Jue','Vie','Sab'],
		dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sa'],
		dayStatus: 'Utilice DD como primer día de la semana', dateStatus: 'Elejir el DD, MM d',
		dateFormat: 'dd/mm/yy', firstDay: 0, 
		initStatus: 'Elija la fecha', isRTL: false};
	$.datepicker.setDefaults($.datepicker.regional['es']);
});