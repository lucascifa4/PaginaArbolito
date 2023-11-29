<div class="modal fade" id="ModalVotos" tabindex="-1" aria-labelledby="exampleModalVotos" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bienvenido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2><strong>Cantidad de Votos</strong></h2>
          <ul>
          <li><h5><strong>Remera Varón: {{$votos1}} Votos</strong></li></h5>
          <li><h5><strong>Remera Mujer: {{$votos2}} Votos</strong></li></h5>
          <li><h5><strong>Campera azúl: {{$votos3}} Votos</strong></li></h5>
          <li><h5><strong>Campera verde: {{$votos4}} Votos</strong></li></h5>
          </ul>
          <p><strong>Para votar, simplemente haga clic en el botón "Votar" junto a la opción que prefiera.</strong></p>
          <p><strong>Recuerde que puede visitar nuestro sitio oficial para obtener más información.</strong></p>
          <a href="https://arbolitounionsocia.wixsite.com/uninsocialydeportiva" target="_blank" class="btn btn-success">Visitar nuestro sitio oficial</a>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">atras</button>
        </div>
      </div>
    </div>
    <style>
      .modal-content {
        background-image: url('{{ asset('img/whipala.jpeg') }}'); 
        background-size: cover;
        background-position: center;
      }
    </style>
</div>