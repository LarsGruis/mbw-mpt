<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, minimal-ui">

    <!-- WARNING: this will impact performance. remove when deploying to production -->
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">

    <title>Mooiplekjetexel.nl</title>

    <!-- Vuetify CSS -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/@mdi/font@3.x/css/materialdesignicons.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/home.css') }}">
</head>

<body>

<div id="menu">
  <v-app id="inspire">
    <div>
      <v-toolbar>
        <v-toolbar-title>Mooiplekjetexel.nl</v-toolbar-title>
  
        <div class="flex-grow-1"></div>
  
        <v-toolbar-items>
          <v-btn text>Home</v-btn>
          <v-btn text>Chalets</v-btn>
          <v-btn text>Contact</v-btn>
        </v-toolbar-items>
  
        <template v-if="$vuetify.breakpoint.smAndUp">
          <v-btn icon>
            <v-icon>mdi-export-variant</v-icon>
          </v-btn>
        </template>
      </v-toolbar>
    </div>
  </v-app>
</div>

<div id="slider">
  <v-app id="inspire">
    <v-carousel>
      <v-carousel-item
        v-for="(item,i) in items"
        :key="i"
        :src="item.src"
      ></v-carousel-item>
    </v-carousel>
  </v-app>
</div>

<div id="footer">
  <v-app id="inspire">
    <v-footer
      color="primary lighten-1"
      padless
    >
      <v-row
        justify="center"
        no-gutters
      >
        <v-btn
          v-for="link in links"
          :key="link"
          color="white"
          text
          rounded
          class="my-2"
        >
          @{{ link }}
        </v-btn>
<!--         <v-card-text>
          <v-btn
            v-for="icon in icons"
            :key="icon"
            class="mx-4 white--text"
            icon
          >
            <v-icon size="24px" color="white">@{{ icon }}</v-icon>
          </v-btn>
        </v-card-text> -->
  
<!--         <v-card-text class="white--text pt-0">
          Phasellus feugiat arcu sapien, et iaculis ipsum elementum sit amet. Mauris cursus commodo interdum. Praesent ut risus eget metus luctus accumsan id ultrices nunc. Sed at orci sed massa consectetur dignissim a sit amet dui. Duis commodo vitae velit et faucibus. Morbi vehicula lacinia malesuada. Nulla placerat augue vel ipsum ultrices, cursus iaculis dui sollicitudin. Vestibulum eu ipsum vel diam elementum tempor vel ut orci. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
        </v-card-text> -->
        <v-col
          class="primary lighten-2 py-4 text-center white--text"
          cols="12"
        >
          @{{ new Date().getFullYear() }} — <strong>Mooiplekjetexel.nl</strong>
        </v-col>
      </v-row>
    </v-footer>
  </v-app>
</div>

  <script src="https://cdn.jsdelivr.net/npm/vue@2.x/dist/vue.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/vuetify@2.x/dist/vuetify.js"></script>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>


