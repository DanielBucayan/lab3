<main class="main-container">
<section id="intro-section">
<h2 style="text-align: center;">Welcome to my Poetry Collection!</h2>
<p><i><b>
"The clouds will sometimes block the sun. The fog will sometimes block your view.<br>
But that doesn't mean there is no sun or a beautiful scenery waiting for you."<br></b></i>
</p>
</section>
</main>

<main class="main-container">
<section id="intro-section">
<p id="greeting"></p>
</section>
</main>

<main class="second-container">
<section id="line-otd">
<h3 id="lineoftheday">Line of the Day</h3>
</section>
</main>

<script>
  window.onload = function () {
    setTimeout(function () {
      document.getElementById("line-otd").innerHTML = "Who could've thought that things could end up this worse. Just by holding on tightly on the broken memories that brought happiness at first.";
    }, 5000);
	
  };
  const author = {
  firstName: "Daniel",
  lastName: "Bucayan",
  id: 5566,
  helloGreeting : function() {
    return "Hi, I am" + " " +this.firstName + " " + this.lastName + ". " + "I am the author of these poems.";
  }
};
document.getElementById("greeting").innerHTML = author.helloGreeting();
</script>