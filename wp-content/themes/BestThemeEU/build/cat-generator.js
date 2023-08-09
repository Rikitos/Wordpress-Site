export default class CatGenerator {
  constructor() {
    this.img = document.querySelector('.Image-Generator__img');
    this.btn = document.querySelector('.Image-Generator__btn');
    this.imgURL = this.img.getAttribute('data-url');
    console.log(this.imgURL);
    this.btn.addEventListener('click', () => {
      console.log('click');
      this.randomizeImage();
    })
    this.testing();
  }

  randomizeImage() {
    this.randomNum = Math.ceil(Math.random() * 7);
    this.img.src = `${this.imgURL}/cat${this.randomNum}.jpg`;

  }
  testing() {
    console.log('leg')
  }
}


// document.addEventListener('DOMContentLoaded', () => {
//   new CatGenerator();
// });