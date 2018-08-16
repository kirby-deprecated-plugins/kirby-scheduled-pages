panel.plugin("jenstornell/schedule", {
  fields: {
    schedule: {
      props: {
        label: String,
        value: String
      },
      computed: {
        isScheduled: function() {
          const date = new Date(this.value);
          const now = new Date();
          return now < date;
        },
        icon: function() {
            return (this.isScheduled) ? 'clock' : 'none';
        }
      },
      methods: {
        onInput() {
          this.$emit("input", this.value);
        }
      },

      created: function() {
        var style = document.createElement('style');
        var icon = document.createElement('span');
        style.innerHTML = `
        [data-scheduled=true].k-status-flag-listed .k-button-text:after,
        [data-scheduled=true].k-status-flag-unlisted .k-button-text:after {
          color: #999;
        }
        .schedule-icon {
          position: absolute;
          top: 0;
          left: 0;
          padding: 1rem .75rem;
          display: none;
        }

        [data-scheduled=true].k-status-flag-listed .schedule-icon svg,
        [data-scheduled=true].k-status-flag-unlisted .schedule-icon svg {
          fill: #c82829;
        }

        [data-scheduled=true].k-status-flag-listed .schedule-icon,
        [data-scheduled=true].k-status-flag-unlisted .schedule-icon {
          display: block;
        }

        [data-scheduled=true].k-status-flag-listed .k-icon,
        [data-scheduled=true].k-status-flag-unlisted .k-icon {
          visibility: hidden;
        }
        `;
        icon.innerHTML = '<svg viewBox="0 0 16 16"><use xlink:href="#icon-clock"></use></svg>';
        icon.classList.add('schedule-icon');

        document.querySelector('.k-status-flag').appendChild(style);
        document.querySelector('.k-status-flag').appendChild(icon);

        if(this.isScheduled) {
          document.querySelector('.k-status-flag').setAttribute('data-scheduled', true);
        } else {
          document.querySelector('.k-status-flag').setAttribute('data-scheduled', false);
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