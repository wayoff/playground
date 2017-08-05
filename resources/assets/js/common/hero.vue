<template>
    <section class="hero is-primary">
      <div class="hero-body">
        <div class="container">
          <div class="columns is-vcentered">
            <div class="column">
              <p class="title">
                <slot name="title"></slot>
              </p>
              <p class="subtitle">
                <slot name="sub-title"></slot>
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="hero-foot">
        <div class="container">
          <nav class="tabs is-boxed">
            <slot name="nav"></slot>
            <!-- <ul>
              <li>
                <a href="/documentation/overview/start/">Overview</a>
              </li>
              <li>
                <a href="http://bulma.io/documentation/modifiers/syntax">Modifiers</a>
              </li>
              <li>
                <a href="http://bulma.io/documentation/grid/columns">Grid</a>
              </li>
              <li>
                <a href="http://bulma.io/documentation/form/general">Form</a>
              </li>
              <li>
                <a href="http://bulma.io/documentation/elements/box/">Elements</a>
              </li>
              <li>
                
                  <a href="http://bulma.io/documentation/components/breadcrumb/">Components</a>
                
              </li>
              <li class="is-active">
                <a href="http://bulma.io/documentation/layout/container/">Layout</a>
              </li>
            </ul> -->
          </nav>
        </div>
      </div>
    </section>
</template>

<script>
    export default {
        mounted() {
            // console.log('Hero')
        }
    }
</script>