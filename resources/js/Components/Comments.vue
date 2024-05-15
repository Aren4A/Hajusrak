<script setup>
import { ref } from "vue";
import SecondaryButton from "./SecondaryButton.vue";
import { Link } from "@inertiajs/vue3";
import dayjs from "dayjs";
import relativeTime from "dayjs/plugin/relativeTime";

dayjs.extend(relativeTime);

defineProps(["comments"]);

</script>

<template>


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

</template>
