  
<script
  src="https://code.jquery.com/jquery-3.5.1.js"
  integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
  crossorigin="anonymous"></script>

  <script>
    $(document).on('click', '#buscar', function(){
        var cep = $("#cep").val();
        $.ajax({
            type:"get",
            url:" https://api.hgbrasil.com/weather?key=b2ef5572&city_name="+cep+"",
            success: function(data){
                var conteudo = '';
                conteudo+= "<p>Temperatura:"+data.temp+"</p>";
                conteudo+= "<p>Data:"+data.date+"</p>";
                conteudo+= "<p>Cidade:"+data.city_name+"</p>";
              
                $("#dados").append(conteudo);
            }
        });
    });
  </script>


<div class="row">
	 <div class="col-6">
	 <div class="form-group">
	   <label for="">CEP:</label>
	   <input type="text" class="form-control" id="cep" placeholder="Itanhaém,SP">	 
	  </div>
	 </div>
	</div>  

	<div class="row">
	 <div class="col-6">
	  <div class="form-group">
	  	<button id="buscar" class="btn btn-primary btn-block">Buscar</button>
	  	 </div>
	 </div>
	</div>  