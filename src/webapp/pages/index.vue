<template>
  <div>
    <b-row>
      <h1 class="display-2">
        {{ $t('pages.home.welcome') }}
        <small class="text-muted">Vue.js Test</small>
      </h1>
    </b-row>
    <b-row class="justify-content-center">
      <p class="lead">{{ $t('pages.home.message') }}</p>
    </b-row>
  </div>
</template>

<script>
export default {
  name: 'Index',
}
</script>
