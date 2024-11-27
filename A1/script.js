const cards = document.getElementsByClassName("card");
const main = document.getElementById("main");

for (let i = 0; i < cards.length; i++) {
  let i2 = i + 1;
  let i3 = i - 1;
  cards[i].addEventListener("mouseover", function () {
    if (i === 0) {
      cards[i].classList.add("selected");
      cards[i2].classList.add("selected2");
    } else if (i === 9) {
      cards[i].classList.add("selected");
      cards[i3].classList.add("selected2");
    } else {
      cards[i].classList.add("selected");
      cards[i2].classList.add("selected2");
      cards[i3].classList.add("selected2");
    }
  });
  cards[i].addEventListener("mouseout", function () {
    if (cards[i].classList.contains("selected")) {
      if (i === 0) {
        cards[i].classList.remove("selected");
        cards[i2].classList.remove("selected2");
      } else if (i === 9) {
        cards[i].classList.remove("selected");
        cards[i3].classList.remove("selected2");
      } else {
        cards[i].classList.remove("selected");
        cards[i3].classList.remove("selected2");
        cards[i2].classList.remove("selected2");
      }
    }
  });
}
