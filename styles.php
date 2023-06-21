<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Sigmar&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');

*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
html{
    background-image: linear-gradient(to bottom,#ffb9ba, #f3dfb6);
    background-attachment: fixed;
}
header {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding: 15px;
    z-index: 9999999;
    /* background-image: linear-gradient(to bottom,#ffb9ba, #f3dfb6); */
    background-color: linear-gradient(to bottom,#ffb9ba, #f3dfb6);

    box-shadow: 0px 7px 9px 0px #72717161;

    height: 10vh;

    font-family: 'Cherry Bomb One', cursive;

    position: static;
    top: 0;
}
header nav ul {
    display: flex;
    gap: 4.75rem;
    flex-wrap: wrap;

    list-style: none;

    margin-right: 30px;     
}
header nav a {
    text-decoration: none;
    color: #fff;

    font-weight: 400;
    font-size: 2rem;
    
    
}
header nav a:hover{
    color: #F952EB;
    transition: 0.9ms;
}

main{
    
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

h1{
    padding-top: 2rem;
    padding-bottom: 1rem;
    text-align: center;
    font-family: 'Sigmar', cursive;
    color: #9615b9;
    filter: drop-shadow(5px 5px 4px #85848470);
    z-index: 1;

}


form input {
    border: solid #898d8d 0.5px;
    border-radius: 20px;
    font-family: 'Quicksand', sans-serif;
    height: 4vh;
    padding: 0.5rem;
}

div.form-auth {
    width: max-content;
    padding: 1rem;
   text-align: left;
   height: max-content;

   background-color: #ffff;
   border-radius: 8px;
   box-shadow:3px 2px 4px 0px #898d8d;
   display: flex;
   flex-direction: column;
   align-items: center;
   justify-content: space-around;
 
}

form {
    display: flex;
    flex-direction: column;
    flex-wrap: wrap;
    gap: 0.75rem;
    justify-content: center;
    font-family: 'Quicksand', sans-serif;
    padding: 1rem;
    
}
form label{
    font-size: larger;
    color: #BA48DB;
}

.anoFim{
    display: flex;
    flex-direction: row;
    align-items: center;
    gap: 0.75rem;
}
#andamento {
    font-size: medium;
}
  .genero select {
    background-color: #BA48DB;
    font-family: 'Quicksand', sans-serif;
    color: white;
    padding: 0.5rem;
    width: 12.5rem;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    -webkit-appearance: button;
    appearance: button;
    outline: none;
  }
  
  .genero::before {
    
    font-family: 'Quicksand', sans-serif;
 
    width: 20%;
    height: 100%;
    text-align: center;
    font-size:1rem;
    line-height: 45px;
    pointer-events: none;
  }
  
  .genero select option {
    font-family: 'Quicksand', sans-serif;
    padding: 2rem;
  }
  .genero select:hover {
    cursor: pointer;
    background-color: #F952EB;
    transition: 0.2s;
  }
form .sinopse {
    display: flex;
}

form .sinopse textarea{
        /* background-size: 100% 4rem; */
        border: 1px solid #CCC;
        width: 20rem;
        height: 5rem;
        line-height: 1rem;
        margin: 0 auto;
        padding: 0.25rem;
        font-family: inherit;
        font-size: small;
} 


form .button-login{
    background-color: #A75CF2;
    color: #ffffff;
    text-decoration: none;
    padding: 8px;
    border-radius: 20px;
    margin-top: 10px;
    font-size: small;  
    transition: 0.5s;
}
form .button-login:hover{
    background-color: #F952EB;
    
}
form .sign-in{
    display: flex;
    align-items: center;
    justify-content: center;
}
form div.sign-in button.submit-button {

    margin-top: 20px;

    background-color: #BA48DB;
    color: white;
    border-style: none;
    
    width: 300px;
    
    text-shadow:none;
    box-shadow:3px 2px 4px 0px #898d8d;
    color: #ffffff;
    text-decoration: none;
    font-size: larger;
    font-family: 'Quicksand', sans-serif;
    
    padding: 8px;
    border-radius: 20px;
     
    height: 6vh;

    text-align: center;
    cursor: pointer;
    transition: 0.5s;
    
    }
    form div.sign-in button.submit-button:hover{
        background-color: #F952EB;
    } 
    
    .error{
        font-size: 12px;
        color: red;
        margin-top: 0;
        text-align: initial;
    }

    .excluir {
        display: flex;
        align-items: center;
        justify-content: space-around;
    }
    .excluir div {
        margin-top: 1rem;
        padding: 0.75rem;
        width: max-content;
        height: max-content;
        background-color: #A75CF2;
        border-radius: 8px;
        transition: 0.2s;
    }
    .excluir div:hover{
        background-color: #ffb9ba;
    }
    .excluir a{
        text-decoration: none;
        color: #fff;
        padding: 0.25rem;
    }
    </style>