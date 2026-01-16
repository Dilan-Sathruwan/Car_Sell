<script setup lang="ts">
import SplineScene from './SplineScene.vue'
import { Card } from '@/components/ui/card'
import Spotlight from '@/components/ui/spotlight.vue'
</script>

<template>
  <Card class="w-full h-[500px] bg-black/[0.96] relative overflow-hidden">
    <Spotlight
      class="-top-40 left-0 md:left-60 md:-top-20"
      fill="white"
    />
    
    <div class="flex h-full">
      <!-- Left content -->
      <div class="flex-1 p-8 relative z-10 flex flex-col justify-center">
        <h1 class="text-4xl md:text-5xl font-bold bg-clip-text text-transparent bg-gradient-to-b from-neutral-50 to-neutral-400">
          Interactive 3D
        </h1>
        <p class="mt-4 text-neutral-300 max-w-lg">
          Bring your UI to life with beautiful 3D scenes. Create immersive experiences 
          that capture attention and enhance your design.
        </p>
      </div>

      <!-- Right content -->
      <div class="flex-1 relative">
        <SplineScene 
          scene="https://prod.spline.design/kZDDjO5HuC9GJUM2/scene.splinecode"
          class="w-full h-full"
        />
      </div>
    </div>
  </Card>
</template>