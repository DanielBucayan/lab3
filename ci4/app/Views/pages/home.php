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
<h2 class="poem-title" onclick="togglePoem('endlessHorizon')">Endless Horizon</h2>
<pre class="poem-content" id="endlessHorizonPoemContent">
Two sad souls played by destiny's cruel game.
Made it seemed like everything's set to look great on frame.
Helped both of them create memories that would always remind each other's names.
Only to wash out every chances, and put out those burning flames. 

The wind blew them apart, along with the clouds full of memories.
Fearing that everything would be erased and replaced by harsh realities,
He decided to write every magic that he thought was only possible in fantasies.
But it rained on his diary as he writes down the last part, recollecting the torn
pages within his libraries. 

As he stare and read what he wrote once more,
He decided to just let destiny win, as the last page he tore.
The page was brought by the wind to the other side of the shore.
That's where a woman caught it and was able to read it, dropping with her knees
on the floor. 

"From the stars to the sunset at the horizon, where the sky meets the sea.
You've somehow resembled everything that I wished to gaze and see,
But you've always been far away from me. Maybe that's how it's meant to be.
And that I can only long for you and wait 'til an apple grows in an orange tree."
      </pre>
    </div
</main>

