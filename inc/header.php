<!-- Connection to Database: -->
<?php include 'config/database.php'; ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS from bootstrap: -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    
    <!-- CSS by me: -->
    <link rel="stylesheet" href="stylesheet.css">
    <link rel="stylesheet" href="APIcall.css">
    
    <!-- Link to Fontawesome.com open source icons: -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">



    <title>Ryan Bills</title>
</head>

<!-- API being called: -->
<!-- MERRIAM-WEBSTER'S COLLEGIATE® DICTIONARY WITH AUDIO -->
<!-- https://www.dictionaryapi.com/products/api-collegiate-dictionary -->

<script>
    function getWord(form){
        let x = document.getElementById("word");
        console.log(x.value);
        let y = "https://www.dictionaryapi.com/api/v3/references/collegiate/json/" + x.value + "?key=187c4c4a-a0d5-41a5-9420-2a62a0a83c99";
        
        console.log(y);
        let url = y;
        
        let word = document.createElement('h1');
        let syllables = document.createElement('em');
        let stem = document.createElement('p');
        let speech = document.createElement('p');
        let date = document.createElement('p');
        let def = document.createElement('p');
        
        document.getElementById('results').append(word);
        document.getElementById('results').appendChild(syllables);
        document.getElementById('results').appendChild(def);
        document.getElementById('results').appendChild(stem);
        document.getElementById('results').appendChild(speech);
        document.getElementById('results').appendChild(date);
        
        fetch(url)
            .then(response =>{
                return response.json()
            .then(json =>{
                word.innerHTML = json[0].meta.id
                console.log("Word added")
                syllables.innerHTML = json[0].hwi.hw
                console.log("Syllables added")
                stem.innerHTML = json[0].meta.stems
                console.log("Stems added")
                speech.innerHTML = json[0].fl
                console.log("8 parts of speech added")
                date.innerHTML = json[0].date
                console.log("Date of origin added")
                def.innerHTML = json[0].shortdef[0]
                console.log("Definition added")

            })
            .catch(err=>{
                console.log('Errors:' + err.message)
            })
        })
    }
</script>
<!-- End API call for Webster's Dictionary -->




<!-- API being called: -->
<!-- NASA Astronomy Picture of the Day API -->
<!-- https://api.nasa.gov/ -->
<script>
    async function getApod(){
        let API_KEY = "i9ekYlevBAfCFrbWUYKyXCVblpOZsaDpHR8Gd34H"
        let response = await fetch(`https://api.nasa.gov/planetary/apod?api_key=${API_KEY}`);
        
        // console.log(response);
        let data = await response.json();
        // console.log(data)
        
        
        let day = document.createElement('p')
        let image = document.createElement('p');
        let exp = document.createElement('p');
        

        document.getElementById('apod').append(day)
        document.getElementById('apod').appendChild(image);
        document.getElementById('apod').appendChild(exp);

        day.innerHTML += data.date;
        image.innerHTML += `<img src="${data.url}" class="pic" style="max-width:600px"/>`;
        exp.innerHTML += data.explanation;
    }
</script>
<!-- End NASA API call -->

<body>
    <nav class="navbar">
        
            <!-- Name: -->
            <div class="nav-item">
                <h4>Ryan Bills</h4>
            </div>
            
            <!-- Page Links: -->
            <div class="links">
                    <!-- <i class="fa-solid fa-hand-point-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
                    <a class="nav-link" href="/resume/index.php"> Welcome </a>
                    <a class="nav-link" href="/resume/about.php"> About Me </a>
                    <a class="nav-link" href="/resume/military.php"> Military Career </a>
                    <a class="nav-link" href="/resume/projects.php"> Projects </a>
                    
            </div>

            <!-- Contact: -->
            <div class="nav-item">
                <a href="/resume/contact.php" class="contact"><h4>Contact Me!</h4></a>
            </div>
        
    </nav>

<main>
  <div class="content">