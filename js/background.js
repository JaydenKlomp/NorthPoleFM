const menu = document.getElementById("menu"); //Gets data from menu div

Array.from(document.getElementsByClassName("menu-item")) //Convert them to an array so they will repeat
  .forEach((item, index) => {
    item.onmouseover = () => { //When the mouse hovers over the item it will update the active data
      menu.dataset.activeIndex = index; 
    }
  });