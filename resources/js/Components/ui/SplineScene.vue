<script setup lang="ts">
import { ref, onMounted, onUnmounted } from 'vue'

interface SplineSceneProps {
  scene: string
  className?: string
}

const props = withDefaults(defineProps<SplineSceneProps>(), {
  className: "",
})

const containerRef = ref<HTMLElement>()
let splineInstance: any = null

onMounted(async () => {
  try {
    const { Spline } = await import('@splinetool/runtime')
    splineInstance = new Spline(containerRef.value)
    await splineInstance.load(props.scene)
  } catch (error) {
    console.error('Failed to load Spline scene:', error)
  }
})

onUnmounted(() => {
  if (splineInstance && typeof splineInstance.destroy === 'function') {
    splineInstance.destroy()
  }
})
</script>

<template>
  <div 
    ref="containerRef" 
    :class="props.className"
    style="width: 100%; height: 100%;"
  >
    <!-- Spline scene will be loaded here -->
  </div>
</template>