<template>
    <div class="container">
      <section class="hero is-dark is-fullheight">
      <div class="hero-head">
        <header class="navbar">
          <div class="container">
            <div class="navbar-brand">
              <span class="navbar-burger burger" data-target="navbarMenuHeroC">
                <span></span>
                <span></span>
                <span></span>
              </span>
            </div>
            <div id="navbarMenuHeroC" class="navbar-menu">
              <div class="navbar-end">
                  <router-link class="navbar-item" to="/" exact>Inicio</router-link>
                  <router-link class="navbar-item" to="hello">Novedades</router-link>
                  <router-link class="navbar-item" to="demo">Acerca</router-link>
                  <router-link class="navbar-item" to="contact">Contacto</router-link>
                <span class="navbar-item">
                  <a class="button is-success">
                    <span class="icon">
                      <i class="fa fa-github"></i>
                    </span>
                    <span>Download</span>
                  </a>
                </span>
              </div>
            </div>
          </div>
        </header>
      </div>

      <router-view></router-view>
            <!-- Hero footer: will stick at the bottom -->
      <div class="hero-foot">
        <nav class="tabs is-boxed is-fullwidth">
<!--           <div class="container">
            <ul>
              <li class="is-active"><a>Overview</a></li>
              <li><a>Modifiers</a></li>
              <li><a>Grid</a></li>
              <li><a>Elements</a></li>
              <li><a>Components</a></li>
              <li><a>Layout</a></li>
            </ul>
          </div> -->
        </nav>
      </div>
    </section>
  </div>
</template>

<script>
  export default {
    name: 'app'
  }
</script>