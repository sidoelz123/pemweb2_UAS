<!-- Start Modal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog">
     <div class="modal-content">
       <div class="modal-header">
         <h5 class="modal-title" id="exampleModalLabel">Update Mail</h5>
         <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
       </div>
       <div class="modal-body">
           <div class="form-group mt-2">
             <label>Number of mail</label>
             <input type="hidden" class="form-control" name="id" id="id_update" >
             <input type="text" class="form-control" id ="number_mail" name ="number_mail" required>
           </div>
           <div class="form-group mt-2">
             <label for="nama">Date</label>
             <input type="date" class="form-control" id ="date" name ="date"  required>
           </div>
           <div class="form-group mt-2">
             <label for="prodi">Title</label>
             <input type="text" class="form-control" id ="title" name ="title"  required>
           </div>
           <div class="modal-footer mt-3">
             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
             <button type="submit" id="submit_update" name="submit_update" class="btn btn-primary">Save Update</button>
           </div>
       </div>
       
     </div>
   </div>
 </div>