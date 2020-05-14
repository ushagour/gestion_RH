
</div>
</div>

<footer class="page-footer font-small blue-grey lighten-5 w-100" >
  <div class="footer-copyright text-center text-black-50 py-3">© 2020 Copyright:
    <a class="dark-grey-text" href="<?=base_url()?>home"> gestionRH </a>
  </div> 

</footer>
</main>
<script>
var myVar;

function myFunction() {
  myVar = setTimeout(showPage, 1000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("page").style.display = "block";
}
</script>
</body>
</html>
