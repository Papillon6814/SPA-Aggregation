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
    </div>
    <div class="footer">
    </div>
  </div>
</template>

<style>
.app-bar {
  position: relative;
  top: 0;
  left: 0;

  height: 70px;
  width: 100vw;

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
  height: 1000px;
}

.footer {
  background: #ab7736;

  height: 200px;
  width: 100%;
}
</style>
