@php
$values = json_decode($dataTypeContent->{$row->field});
@endphp
@if ($values)
@foreach ($values->q as $key => $item)
<li class="list-group-item">
 <div class="control-group">
  <div id="row{{$key}}" style="display:flex;width:100%; align-items:center">
   <div class="row" style="width:100%;">
    <div class="col-md-6">
     <label for="">Soru</label>
     <input type="text" name="{{$row->field}}[q][]" value="{{$item}}" placeholder="Soru" class="form-control"/> 
    </div>
    <div class="col-md-3">
     <label for="">Cevap Şekli</label>
     <select name="{{$row->field}}[t][]" class="form-control">
      <option value="2" @selected(isset($values->t[$key]) && $values->t[$key] == 2) >Evet/Hayır</option>
      <option value="3" @selected(isset($values->t[$key]) && $values->t[$key] == 3) >Evet/Hayır/Evden Çalışma</option>
     </select>
    </div>
    <div class="col-md-3">
     <label for="">Doğru Cevap</label>
     <select name="{{$row->field}}[r][]" class="form-control">
      <option value="Evet" @selected(isset($values->r[$key]) && $values->r[$key] == "Evet")>Evet</option>
      <option value="Hayır" @selected(isset($values->r[$key]) && $values->r[$key] == "Hayır")>Hayır</option>
     </select>
    </div>
   </div>
   <button type="button" name="remove" id="{{$key}}" class="btn btn-danger btn_remove" style="margin-left: 1em">X</button>
  </div>
 </div>
</li>
@endforeach
@else
{{-- <li class="list-group-item">
 <div class="control-group">
  <div id="row1" style="display:flex;width:100%; align-items:center">
   <div class="row" style="width:100%;">
    <div class="col-md-6">
     <label for="">Soru</label>
     <input type="text" name="{{$row->field}}[q][]" placeholder="Soru" class="form-control"/> 
    </div>
    <div class="col-md-3">
     <label for="">Cevap Şekli</label>
     <select name="{{$row->field}}[t]" class="form-control">
      <option value="2" >Evet/Hayır</option>
      <option value="3" >Evet/Hayır/Evden Çalışma</option>
     </select>
    </div>
    <div class="col-md-3">
     <label for="">Doğru Cevap</label>
     <select name="{{$row->field}}[r]" class="form-control">
      <option value="Evet">Evet</option>
      <option value="Hayır">Hayır</option>
     </select>
    </div>
   </div>
   <button type="button" name="remove" id="1" class="btn btn-danger btn_remove" style="margin-left: 1em">X</button>
  </div>
 </div>
</li> --}}
@endif
<div id="dynamic_field"></div>
<button type="button" name="add" id="add" class="btn btn-success">Ekle</button>

@push('javascript')
<script>
 $(document).ready(function () {     
  var i=1;  
  $('#add').click(function(){ 
   i++;  
   $('#dynamic_field').append('<div id="row'+i+'" class="dynamic-added list-group-item" style="display:flex;width:100%; align-items:center"><div class="row" style="width:100%;"><div class="col-md-6"><input type="text" name="{{$row->field}}[q][]" placeholder="{{$row->display_name}}" class="form-control name_list" /></div><div class="col-md-3"><select name="{{$row->field}}[t][]" class="form-control"><option value="2">Evet/Hayır</option><option value="3">Evet/Hayır/Evden Çalışma</option></select></div><div class="col-md-3"><select name="{{$row->field}}[r][]" class="form-control"><option value="Evet">Evet</option><option value="Hayır">Hayır</option></select></div></div><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove" style="margin-left: 1em">X</button></div>');  
  });  
  
  
  $(document).on('click', '.btn_remove', function(){  
   var button_id = $(this).attr("id");   
   $('#row'+button_id+'').remove(); 
   $(button_id).remove(); 
  });  
 });
</script>
@endpush