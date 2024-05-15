<script setup>
import { ref } from "vue";
import SecondaryButton from "./SecondaryButton.vue";
import { Link } from "@inertiajs/vue3";
import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";

dayjs.extend(relativeTime);

defineProps(["comments"]);

const viewComments = ref(false);
</script>

<template>
  <!-- VIEW ALL COMMENTS -->
  <div class="flex justify-end divide-y-4">
    <div class="flex flex-row gap-3">
      <SecondaryButton
        class="text-2x text-black/75 font-extrabold hover:text-indigo-500"
        @click="viewComments = true"
        >LISATUD KOMMENTAARID</SecondaryButton
      >
      <button
        v-if="viewComments"
        class="px-2 text-gray-400 hover:text-gray-200"
        @click="viewComments = false"
      >
        TÜHISTA
      </button>
    </div>
  </div>
  <div v-if="viewComments" class="bg-gray-50">
    <div class="p-5 h-auto">
      <div class="grid">
        <div
          class="p-4 border border-gray-300 rounded-lg shadow-lg grid mb-4 text-sm font-light grid-cols-2"
          v-for="comment in comments"
          :key="comment.id"
        >
          <div>
            <div class="font-bold mb-2">
              {{ comment.user.name || "Unknown User" }}
              <small class="ml-2 text-xs text-gray-400">{{
                dayjs(comment.created_at).fromNow()
              }}</small>
            </div>
            {{ comment.comment }}
          </div>

          <div class="ml-auto mr-0">
            <Link
              v-if="
                comment.user_id === $page.props.auth.user.id || $page.props.auth.user.id === 1
              "
              as="button"
              :href="route('comments.destroy', comment.id)"
              method="delete"
            >
              Kustuta
            </Link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
