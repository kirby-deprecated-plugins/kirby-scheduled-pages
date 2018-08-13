panel.plugin("jenstornell/scheduled-pages", {
  fields: {
    schedule_until: {
      props: {
        label: String,
        value: String,
      },
      computed: {
        isScheduled: function() {
          const date = new Date(this.value)
          const now = new Date()
          return now < date
        },
        icon: function() {
            return (this.isScheduled) ? 'clock' : 'check';
        }
      },
      methods: {
        onInput() {
          this.$emit("input", this.value);
        }
      },

      template: `
      
        <k-date-field :label="label" v-bind:class="{ schedule_until: isScheduled }" v-model="value" v-bind="$attrs" @input="onInput()" ref="input" v-bind:icon="icon">
          {{value}}
        </k-date-field>
      `
    }
  }
});