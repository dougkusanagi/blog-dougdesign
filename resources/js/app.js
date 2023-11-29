import nProgress from "nprogress";
import {
    Alpine,
    Livewire,
} from "../../vendor/livewire/livewire/dist/livewire.esm";
import "./bootstrap";

Livewire.hook("commit", ({ component, commit, respond, succeed, fail }) => {
    nProgress.start();

    succeed(({ snapshot, effect }) => {
        queueMicrotask(() => {
            nProgress.done(true);
            nProgress.remove();
        });
    });
});
