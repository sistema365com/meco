<script>
function search() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("input");
  filter = input.value.toUpperCase();
  ul = document.getElementById("ul");
  li = ul.getElementsByTagName("li");
  for (i = 0; i < li.length; i++) {
  a = li[i].getElementsByTagName("a")[0];
  if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
  li[i].style.display = "block";
  } else {
  li[i].style.display = "none";
  }
 }
}
</script>
<div class="row">
  <div class="col-lg-12">
    <input class="form-control" type="text" id="input" onkeyup="search()" placeholder="Buscar Tutorial" title="Escribe un nombre"> 
  </div>
</div>

<div class="row">
  <div class="col-lg-12 tutoriales">

<ul id="ul">
  <li><a href="#" class="header">Importar productos</a></li>
  <li><a href="#myModal1" data-toggle="modal" data-target="#myModal1">Importar Masivamente</a></li>
  <li><a href="#" class="header">Texto Plano</a></li>
  <li><a href="#myModal2" data-toggle="modal" data-target="#myModal2">Pasar descripciones a texto plano</a></li>
 </ul>


<div id="myModal1" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Importar productos</h4>
      </div>
        <div class="modal-body">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/mQ9juZTq14M" frameborder="0" allowfullscreen></iframe>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Texto Plano</h4>
      </div>
        <div class="modal-body">
            <p>Actualizá tus publicaciones, a partir de Agosto es obligatorio!</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/8tSqZZU3UyA" frameborder="0" allowfullscreen></iframe>
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>



    
  </div>
</div>
