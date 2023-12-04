<div class="modal fade" id="ModalVotos" tabindex="-1" aria-labelledby="exampleModalVotos" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bienvenido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2>Cantidad de Votos</h2>
          <ul>
            <li><h5>Campera verde: {{$votos1}} Votos</li></h5>
            <li><h5>Campera azúl: {{$votos2}} Votos</li></h5>
          <li><h5>Remera Varón: {{$votos3}} Votos</li></h5>
          <li><h5>Remera Mujer: {{$votos4}} Votos</li></h5>
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
        background: linear-gradient(rgba(255, 255, 255, 0.5), rgba(255, 255, 255, 0.5)), url('{{ asset('img/whipala.jpeg') }}');
        background-size: cover;
        background-position: center;
      }
    </style>
</div>