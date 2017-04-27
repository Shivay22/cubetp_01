<style>
button.accordion {
    background-color: #eee;
    background-color: lightgreen;
    color: #444;
    color:blue;
    cursor: pointer;
    padding-top: 18px;
    padding-bottom: 18px;
    width: 80%;
    border: none;
    text-align: center;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
    margin-left:7%;
}

button.accordion.active, button.accordion:hover {
    background-color: #ddd;
    background-color: lightgreen;
}

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
    width:80%;
    margin-left:7%;
}
</style>


<div class="container">

<p style="text-align: center"><img alt="Wavelet" src="images/wavelet_logo_rev_01.jpeg" height=150px>
</p>
</div>

<div class="container" style="padding-bottom:20px">
<h2>
Following vacancies are available with us, you are welcome to apply for these vacancies at learn@cubetp.com. <br><br>
Please avoid your date of birth and house number, Or any other similar personal information in your CV.
</h2>
</div>


<button class="accordion">Full Time Graphic Designer</button>
<div class="panel">
  <p>Qualifications - Graduate
  	<br>
  	Experience - 3-5 Years experience required in Corel Draw - Hindi / English
  </p>
</div>

<button class="accordion">Full Time Web Developer</button>
<div class="panel">
  <p>Qualifications - Graduate
  	<br>
  	Experience - 1-2 Years experience required in Bootstrap, Angular JS and PHP Framework
  </p>
</div>

<button class="accordion">Part Time Electronics Engineer</button>
<div class="panel">
  <p>Qualifications - Graduate Electronics Engineer
  <br>
  	Experience - 1-2 Years experience required in building students level Electronics Projects based on 8051, PIC, Arduino or Raspberry pi
  	</p>
</div>

<button class="accordion">Part Time Mechanical Engineer</button>
<div class="panel">
  <p>Qualifications - Graduate Mechanical Engineer
  <br>
  	Experience - 0-2 Years experience required in Pneumatics / Product Design on SolidWorks
  
  </p>
</div>

<button class="accordion">Marketing associates</button>
<div class="panel">
  <p>
  	Qualifications - Graduate
  	<br>
  	Experience - 1-2 Years experience in Marketing
  </p>
</div>

<br>
<div class="container" style="padding:20px">
<h3>
If the job profile you are looking for is not listed, still you are welcome to talk to us and there is a very high possibility that we will find a suitable job for you in few weeks time, else we will advice you the development path.
</h3>
</div>

<br>
<br>


<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
