<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-datepicker label="My new block with date" :name="fieldName('new_block')" place-holder="My new block with date" enable-time min-date="2018-09-10 12:00" max-date="2019-12-10 12:00" in-store="date"
></a17-datepicker>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
