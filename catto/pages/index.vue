<template>
  <div class="container">

    <div class="app-bar">
      <div class="text">Catto</div>
    </div>

    <div class="content">
      <img class="cattoPic"
      src="../assets/catto.png" />
      <div class="thisIsNotCat">
        <span class="thisIsNot">
          This is not
        </span>
        <span class="cat">
          &nbsp;CAT
        </span>
      </div>
      <div class="butCatto">
        <span class="but">
          But
        </span>
        <span class="catto">
          &nbsp;Catto
        </span>
      </div>
    </div>

    <div class="pics">
      <img class="boxNeko" src="../assets/neko4.jpg" />
      <div class="inclinedNekoBox">
        <img class="inclinedNeko"
        src="../assets/neko2.jpg" />
      </div>
      <span class="boxCattoBoy">
        Box Catto Boy
      </span>
      <span class="andAlso">
        And Also
      </span>

      <div class="whatIsCatto">
        <div class="WICTitle">
          What is CATTO???
        </div>
        <span class="WIC">
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????
        </span>
      </div>

      <img class="angel" src="../assets/neko1.jpg" />

      <div class="whatIsAngel">
        <div class="WIATitle">
          What is CATTO???
        </div>
        <span class="WIA">
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????<br>
          Do you know this CATTO????
        </span>
      </div>
    </div>
    <div class="footer">
    </div>
  </div>
</template>

<style>
body {
  overflow-x: hidden;
}

.app-bar {
  position: relative;
  top: 0;
  left: 0;

  height: 70px;
  width: 100%;

  background-color: #212121;
}

.text {
  color: #fff;
  font-size: 25px;

  width: 10%;
  height: 100%;

  text-align: center;
  line-height: 65px;
}

.content {
  position: relative;

  background: #d0a36a;

  width: 100%;
  height: 550px;
}

.cattoPic {
  position: relative;

  height: 80%;

  left: 50%;
  top: 10%;
}

/* ----------------------*/

.thisIsNotCat {
  position: absolute;

  left: 10%;
  top: 25%;
}

.thisIsNot {
  font-size: 70px;
  color: #fff;
}

.cat {
  font-size: 90px;
  color: #212121;
}

/* ----------------------*/

.butCatto {
  position: absolute;

  left: 30%;
  top: 50%;
}

.but {
  font-size: 70px;
  color: #fff;
}

.catto {
  font-size: 90px;
  color: #212121;
}

/* ----------------------*/

.pics {
  position: relative;

  width: 100%;
  height: 1650px;
}

.boxNeko {
  position: absolute;

  left: 8%;
  top: 8%;

  height: 600px;
}

.inclinedNekoBox {
  position: absolute;

  background: #fff;

  padding: 7px;

  left: calc(8% + 220px);
  top: calc(8% + 450px);
}

.inclinedNeko {
  height: 250px;
}

.boxCattoBoy {
  position: absolute;

  left: calc(8% + 380px);
  top: calc(8% + 80px);

  transform:rotate(90deg);

  color: #212121;
  font-size: 30px;
}

.andAlso {
  position: absolute;

  left: calc(8% + 520px);
  top: calc(8% + 500px);

  transform:rotate(90deg);

  color: #212121;
  font-size: 30px;
}

.whatIsCatto {
  position: absolute;

  top: 8%;
  left: calc(15% + 520px);

  width: 40%;
  height: 50%;
}

.WICTitle {
  position: relative;

  left: -40px;

  color: #212121;
  font-size: 30px;
}

.WIC {
  position: relative;
  top: 10px;
  left: 10px;

  color: #757575;
  font-size: 30px;
}

.angel {
  position: absolute;

  left: 50%;
  bottom: 50px;

  height: 600px;
}

.whatIsAngel {
  position: absolute;

  bottom: -270px;
  right: 55%;

  width: 45%;
  height: 50%;
}

.WIATitle {
  position: relative;
  left: 60px;

  color: #212121;
  font-size: 30px;
}

.WIA {
  position: relative;
  top: 10px;
  left: 100px;

  color: #757575;
  font-size: 30px;
}

/* ----------------------*/

.footer {
  background: #ab7736;

  height: 300px;
  width: 100%;
}
</style>
