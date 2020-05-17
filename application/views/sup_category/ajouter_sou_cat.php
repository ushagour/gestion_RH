

     <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="breadcome-list">
                                <div class="row">
                                <div class="single-pro-review-area">
                                <div id="myTabContent" class="tab-content custom-product-edit">
                                    <div class="product-tab-list tab-pane fade active in" id="description">
                                        <div class="row">
                                            <div class="col-md-12 ">
                                           
                                       
                                            <form action="<?php echo base_url()?>Dashboard/Add_fs_sou_cat" method="Post">
                                            <div class="col-md-6">


                                                <select name="cat_id" required class="form-control pro-edt-select form-control-primary">
                                                <option value="">Sélectionner les Catégories</option>

                                            <?php foreach ($cats as $row) : ?>

                                                <option value="<?php echo $row->id ;?>"><?php echo $row->name ;?></option>


<?php  endforeach; ?>
														</select>
                                              </div> 
                                            <div class="col-md-6">
                                                <div class="review-content-section">
                                                    <div class="input-group mg-b-pro-edt">
                                                        <span class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></span>
                                                        <input type="text" name="souscat" required  class="form-control" placeholder="Sous Catégories" require>
                                                    
                                                    </div>
                
                                                </div>
                                            </div>
                                          
                                              <div class="row">
                                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                        <center>
                                                <button type="submit"  class="btn btn-primary">Ajouter sous Catégorie</button>
                                            </center>
                                                </div>
                                                </div>       
                                                
                                                 </form>  
                                      </div>
                                                
                                    
                                           
                                    </div>
                                 </div>
                              
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
 
           
          <div class="container-fluid">
           <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div  class="breadcome-list">
                <div class="row" id="o">
                    <div class="col-lg-12 ">
                    <div class="col-lg-1">
                    </div>
                    <div class="col-md-10 ">
                        <div class="product-status-wrap">
                        <div class="sparkline8-graph">
                                <div class="static-table-list"  >
                                   
                                   <table class="table  table-inverse table-responsive">
                                       <thead class="thead-inverse">
                                           <tr>
                                               <th>Catégorie</th>
                                               <th>Sous Catégorie</th>
                                               <th style="text-align:right">Action</th>
                                              
                                           </tr>
                                           </thead>
                                           
                                           <tbody>
					<?php foreach($sous_cats as $row):?>
					<tr style="text-align:right">
            <td class="col-1"><?php echo $row->catname ;?></td>
            <td class=""><?php echo $row->souscatname ;?></td>

                    <td style="text-align:right">
         
         
            <button onclick="del(<?php echo $row->id;?>)" type="button" class="btn btn-info"><i class="fa fa-trash-o"
																aria-hidden="true"></i></button>
</td>
</tr>


					<?php endforeach;?>
				</tbody>










                                   </table>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-1 "></div>
                    </div>
                </div>
            </div>
        </div>
        </div>
 </div>
 </div>
 <script>
  function del(id) {
jQuery.ajax({
    type: "GET",
    url: "<?php echo base_url();?>delete-sup-categories/"+ id,
    success: function (data) {
    $('#o').load(location.href+" #o");
    // console.log(data);
    },error: function (data) {
 alert("impression impossible !");
    }
    
});

}
 </script>
