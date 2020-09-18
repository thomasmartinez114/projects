<ul class="nav-item"><?php echo substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1); ?>

<p id="date"></p>

</ul>

<script>
    
    // Date
    var d = new Date();
    document.getElementById('date').innerHTML = d.toString().slice(0, -36);

    // username
    var u = substr(strrchr($_SERVER['AUTH_USER'], '\\'), 1);
    document.getElementById('username').innerHTML = u.toString();
</script>