
          <div class="row">              
		<h4><small> Demandes De congé  </small> </h4>
        &nbsp;
        &nbsp;
        &nbsp;
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modelId">
          Add
        </button>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                    </div>
                    <div class="modal-body">

                        <div class="form-group">
                          <label for=""></label>
                          <input type="text" name="nom" id="nom" class="form-control" placeholder=" nom et prenom " aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="">DATE DE FIN </label>
                          <input type="date" name="date_debut" id="date_debut" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for="date_fin"> DATE DE DEBUT </label>
                          <input type="date" name="date_fin" id="date_fin" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>
                        <div class="form-group">
                          <label for=""></label>
                          <textarea class="form-control" name="title" id="title" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" onclick="add_event()" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </div>
        </div>
		<hr>
     

        <div class="row" >
                            <div class="col">
                              <div class="au-card">
                                <div id="calendar"></div>
                              </div>
                            </div><!-- .col -->
                        </div>

</div>

<!-- modal small -->

<!-- end modal small		 -->

<script>

  //function pour ajouté un nouveau evenement 
  function add_event() {
  var nom =document.getElementById("nom").value
  var date_debut =document.getElementById("date_debut").value
  var date_fin =document.getElementById("date_fin").value
  var title =document.getElementById("title").value
  // build trival night events for example data
  console.log(nom+date_debut+date_fin);
  jQuery.ajax({
				type: "POST",
				url: "<?php echo base_url();?>AddEvent",
        data:{
          
          start:date_debut,
          end:date_fin,
          title: title
        },
				success: function (req){

          $('#content').load(location.href+" #content");

        },
				error: function () {
					alert("erreur !");
				}
			});
}



$(function() {



  $('#calendar').fullCalendar({
    
    header: {
      left: 'prev,next',
      center: 'title',
      right: 'month,agendaDay'
    },
    editable:true,

    selectable:true,
    selectHelper:true,

    eventSources: [
                    {
                        url: '<?php echo base_url();?>Dashbord/loadCalender',
                        color: '#65a9d7',    // an option!
                        textColor: '#3c3d3d'  // an option!

                    }                    
                ],
  });


});


</script>
