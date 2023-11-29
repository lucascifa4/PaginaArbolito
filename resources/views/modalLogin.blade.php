<div class="modal fade" id="ModalUsuario" tabindex="-1" aria-labelledby="exampleModalUsuario" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Bienvenido</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <h2>Bienvenido a la página de votación de indumentaria!</h2>
          <p>En esta página, podrá votar por su indumentaria favorita de entre las siguientes opciones:</p>
          <ul>
            <li>Remera Varón.</li>
            <li>Remera Mujer.</li>
            <li>Campera azúl.</li>
            <li>Campera verde.</li>
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