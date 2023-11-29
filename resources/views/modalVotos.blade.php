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
            <li>Remera Varón. : {{$votos1}} Votos!</li>
            <li>Remera Mujer. : {{$votos2}} Votos!</li>
            <li>Campera azúl. : {{$votos3}} Votos!</li>
            <li>Campera verde. : {{$votos4}} Votos!</li>
          </ul>
          <p>Para votar, simplemente haga clic en el botón "Votar" junto a la opción que prefiera.</p>
          <p>Recuerde que puede visitar nuestro sitio oficial para obtener más información.</p>
          <a href="https://arbolitounionsocia.wixsite.com/uninsocialydeportiva" target="_blank" class="btn btn-primary">Visitar nuestro sitio oficial</a>
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