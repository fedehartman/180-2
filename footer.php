<!--| Footer
=========================================================================== |-->

<footer class="footer-main">
  <div class="newsletter">
    <div class="news-promo">
      <h6>Newsletter</h6>
      <p>Suscribite y recibí todas las noticias por e-mail.</p>
    </div>
    <form class="news-form">
      <fieldset>
        <p>
          <label for="news-nombre">Nombre</label>
          <input type="text" name="nombre" id="news-nombre" required placeholder="Nombre" />
        </p>
        <p>
          <label for="news-email">E-Mail</label>
          <input type="email" name="correo" id="news-email" required placeholder="E-Mail" />
        </p>
        <p>
          <label for="news-sexo">Sexo</label>
          <select id="news-sexo" name="sexo">
            <option value="masculino">Masculino</option>
            <option value="femenino">Femenino</option>
            <option value="otro">Otro</option>
          </select>
        </p>
        <p>
          <label for="news-edu">Educación</label>
          <select id="news-edu" name="educacion">
            <option value="masculino">Primaria</option>
            <option value="femenino">Secundaria</option>
          </select>
        </p>
        <p><button id="news-submit" type="submit">Suscribir</button></p>
      </fieldset>
    </form>
  </div>
  <div class="sitemap">
  </div>
</footer>



<!--|====================================================================== |-->

<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

</body>
</html>