<!-- EXAMPLE USAGE -->
<!-- <float-input v-model="email" type="email" label="Email" required id="email" /> -->
<!-- FOR TEXT AREA -->
<!-- <float-input v-model="message" :isTextarea="true" label="Message" id="message" /> -->

<template>
    <div class="relative">
        <component
            :is="isTextarea ? 'textarea' : 'input'"
            class="h-[48px] block px-[24px] py-[13px] font-medium label-3 text-neutral-700 bg-neutral-50 border-0 border-b-2 border-neutral-50 appearance-none focus:outline-none focus:ring-0 focus:border-b-2 focus:border-neutral-600 peer"
            v-bind="$attrs"
            :type="type"
            :id="id"
            :aria-label="label"
            :placeholder="''"
            :value="modelValue"
            @input="$emit('update:modelValue', $event.target.value)"
        />
        <label
            class="absolute label-3 text-neutral-500 duration-300 transform -translate-y-4 scale-75 top-4 z-10 origin-[0] start-[24px] peer-focus:dark:text-neutral-900 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-4 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto"
            :for="id"
            :class="labelClasses"
        >
            {{ label }}
        </label>
    </div>
</template>

<script>
export default {
    name: 'FloatingLabelInput',
    props: {
        label: {
            type: String,
            default: 'Floating filled',
        },
        modelValue: {
            type: String,
            default: '',
        },
        type: {
            type: String,
            default: 'text',
        },
        id: {
            type: String,
            default: 'floating_filled',
        },
        isTextarea: {
            type: Boolean,
            default: false,
        },
    },
};
</script>
