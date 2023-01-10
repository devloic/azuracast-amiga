import {nowPlayingProps} from "~/functions/useNowPlaying";

export default {
    ...nowPlayingProps,
    backendType: {
        type: String,
        required: true
    },
    userCanManageBroadcasting: {
        type: Boolean,
        required: true
    },
    backendSkipSongUri: {
        type: String,
        required: true
    },
    backendDisconnectStreamerUri: {
        type: String,
        required: true
    }
}