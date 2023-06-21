<style type="text/css">
@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Sigmar&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cherry+Bomb+One&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap');
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

    background-color: linear-gradient(to bottom,#ffb9ba, #f3dfb6);
    z-index: 9999999;

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
main {
    flex: 1;
    padding: 3.5rem;
    overflow: auto;
    display: flex;
    flex-direction: column;
}
table {
    width: 100%;
    border-collapse: collapse;
    min-width: 600px;

}
th {
      background-color: #6667AB;
      padding: 1rem;
      text-align: left;
      color: #fff;
      font-family: 'Roboto Mono', monospace;
      font-size: 0.875rem;
      line-height: 1.6;
}

th:first-child {
        border-top-left-radius: 8px;
        padding-left: 1.5rem;
}

th:last-child {
        border-top-right-radius: 8px;
        padding-right: 1.5rem;
}
td {
      background-color: #F952EB;
      border-top: solid black;
      padding: 1rem;
      font-size: 0.875rem;
      line-height: 1.6;
      font-family: 'Roboto Mono', monospace;
}
td:first-child {
        width: 20%;
        padding-left: 1.5rem;
      }

td:last-child {
        padding-right: 1.5rem;
}
</style>
