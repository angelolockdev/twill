<template>
    <!-- eslint-disable -->
    <div class="block__body">
        <a17-locale type="a17-textfield" :attributes="{ label: 'How much is the Battery?', name: fieldName('battery'), type: 'text', maxlength: 50, inStore: 'value' }" ></a17-locale><a17-singleselect label="size" :name="fieldName('my_block_size')" :options='[{&quot;value&quot;:&quot;4.0\&quot;&quot;,&quot;label&quot;:&quot;4.0\&quot;&quot;},{&quot;value&quot;:&quot;5.0\&quot;&quot;,&quot;label&quot;:&quot;5.0\&quot;&quot;},{&quot;value&quot;:&quot;5.5\&quot;&quot;,&quot;label&quot;:&quot;5.5\&quot;&quot;},{&quot;value&quot;:&quot;6.0\&quot;&quot;,&quot;label&quot;:&quot;6.0\&quot;&quot;},{&quot;value&quot;:&quot;6.3\&quot;&quot;,&quot;label&quot;:&quot;6.3\&quot;&quot;},{&quot;value&quot;:&quot;7\&quot;&quot;,&quot;label&quot;:&quot;7\&quot;&quot;}]' :has-default-store="true" in-store="value" > </a17-singleselect>
    </div>
</template>

<script>
  import BlockMixin from '@/mixins/block'

  export default {
    mixins: [BlockMixin]
  }
</script>
