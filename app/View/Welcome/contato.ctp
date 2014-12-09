<style type="text/css">
.msg_area {
	float: right;
	width: 250px;
	height: 150px;
	margin-top: -260px;
}
.formContato {
	border: 1px solid #EFFFFF;
	padding: 5px;
	width: 500px;
	height: 400px;
	border-radius: 3px;
}
#map-canvas {
	margin: 0;
	padding: 0;
	height: 250px;
	width: 500px;
	margin-left: -5px;
}
</style>

<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=true"></script>

<script>
	var map;
	function initialize() {
		var mapOptions = {
			zoom: 17,
			center: new google.maps.LatLng(-29.653617, -50.577472),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};
		map = new google.maps.Map(document.getElementById('map-canvas'),
		mapOptions);
		var endereco = 'Av. Borges de Medeiros,1836 , Rolante - RS';
		var latlng = new google.maps.LatLng(-29.653617, -50.577472);
		geocoder = new google.maps.Geocoder();
		geocoder.geocode({'latLng':latlng}, function(results, status){
			if( status = google.maps.GeocoderStatus.OK){
				latlng = results[0].geometry.location;
				markerInicio = new google.maps.Marker({position: latlng,map: map});
				map.setCenter(latlng);
			}
		});
	}
	google.maps.event.addDomListener(window, 'load', initialize);
</script>
<div class="row">
<div class="span6" style="margin-top: 35px;">
	<?php echo $this->Form->create('Email'); ?>
	<fieldset class="formContato">
		<h2>Contato</h2>
	 	<?php
			echo $this->Form->input('nome', array( 'placeholder' => 'Nome',
													'label' => array('text' => 'Nome: ')));
			echo $this->Form->input('telefone', array( 'placeholder' => 'Telefone',
													'label' => array('text' => 'Telefone: ')));
			echo $this->Form->input('email', array( 'type' => 'email',
											'placeholder' => 'E-mail',
											'label' => array('text' => 'E-mail: ')));
			echo $this->Form->input('endereco', array( 'placeholder' => 'Endereço',
													'label' => array('text' => 'Endereço: ')));
			$events = array('outro' => 'Outro',
							'duvida' => 'Dúvida',
							'sugestao' => 'Sugestão',
							'reclamacao' => 'Reclamação',
							'orcamento' => 'Orçamento');
			echo $this->Form->input('evento', array('options' => $events,
													'default' => '0',
													'label' => array('text' => 'Assunto: ')));
			echo $this->Form->input('Mensagem', array('div' => 'msg_area',
														'type' => 'textarea',
														'style' => 'width: 95%; height: 100%',
														'rows' => '5',
														'placeholder' => 'Digite sua mensagem...',
														'label' => array('text' => 'Mensagem: ')));
		?>
	</fieldset>
	<?php
	$options = array(
		'label' => 'Enviar',
		'class' => 'btn',
		'style' => 'margin-top: -120px; margin-left: 255px;'
	);
	echo $this->Form->end($options); ?>
</div>

<div class="span6">
	<div class="hero-unit" style="padding-top: 20px; height: 420px;">
		<h3>Endereço</h3>
		<p><b style="font-size: 16px">Endereço:</b><span style="font-size: 14px"> Av. Borges de Medeiros,1836 Rolante - RS, 95690-000</span></p>
		<p><b style="font-size: 16px">Telefone:</b><span style="font-size: 14px"> (51) 3547-1169   -   (51) 9905-6665</span></p>
		<p><b style="font-size: 16px">Horário:</b> <span style="font-size: 14px">Segunda a Sexta 08:30–11:45, 13:30–19:00</span>
		<span style="margin-left: 75px; font-size: 14px;">Sábado 08:00–12:00</span></p>
		<div id="map-canvas"></div>
	</div>
</div>

