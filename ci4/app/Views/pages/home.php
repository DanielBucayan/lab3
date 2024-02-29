<main class="main-container">
<section id="intro-section">
<h2 style="text-align: center;">Welcome to my Poetry Collection!</h2>
<p><i><b>
"The clouds will sometimes block the sun. The fog will sometimes block your view.<br>
But that doesn't mean there is no sun or a beautiful scenery waiting for you."<br></b></i>
</p>
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

<main class="featured-poem">
  <section id="poems-read">
    <div>
      <h2 class="poem-title" onclick="togglePoem('ifOnly')">If Only</h2>
      <pre class="poem-content" id="ifOnlyPoemContent" style="display: none">
I see you, alone and away from the crowd.
Sadness and emptiness can be heard within you, shouting so loud.
Unfortunately, no one seems to hear the cries,
And no one seems to notice the loneliness in your eyes. 

If only there was someone there beside you.
Maybe the world could've turned into a much better view.
If only you met them much more sooner,
Then maybe you wouldn't always see yourself as a stranger. 

If only you knew how to be a bit more social,
Maybe you could've felt it ahead of time, being someone special.
If only you weren't too silent,
Maybe you'll have much more cherishable moments. 

Looking back at that time, where it's so dark and foggy,
Back when I was a nobody in a crowd full of somebody.
I have so many regrets and ifs that I wish I could've done.
But, thinking about it, do I really want to change a single one?
      </pre>
    </div>
  </section>
</main>
