<a id='contributers_createModalButton' class='btn btn-default btn-lg btn-block btn-primary' href="#contributers_create" data-toggle='modal' role='button'>{!! fa2('plus-square',['size'=>0]) !!} أضف مساهم جديد</a>


<!--login modal-->
<div id="contributers_create" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">

      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="text-center">{!! fa('users') !!} أضف مساهم جديد</h2>
      </div>

<form action='{{url("admin/create-contributor")}}' method='post' enctype="multipart/form-data">

      <div class="modal-body">



<div class="input-group">
      <span class="input-group-addon">{!! fa('user') !!}</span>
      <input class="form-control" placeholder="أسم المساهم" required="required" autofocus="autofocus" name="name" type="text"> 
</div>
<div class="input-group">
      <span class="input-group-addon">{!! fa('image') !!}</span>
      <input class="form-control" placeholder="أختر صورة" required="required" autofocus="autofocus" name="upload_img" type="file"> 
</div>
<div class="input-group"> 
      <span class="input-group-addon">{!! fa('inbox') !!}</span> 
      <textarea name="desc" rows="4" class='widthfix form-control' placeholder='أضف نبذة'></textarea>
</div>


</div>


<button type='submit' class="btn btn-primary btn-md btn-block">{!! fa('thumb-up') !!} أضف</button>
</form>


<div class="clearfix" style='margin-bottom:2%;'></div>
</div>
      </div>
  </div>