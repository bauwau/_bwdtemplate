
//http://jonhall.info/how_to/create_a_playlist_for_html5_audio

        jQuery(function($) {
                var supportsAudio = !!document.createElement('audio').canPlayType;
                if(supportsAudio) {
                        var index = 0,
                        playing = false;
                        mediaPath = '/how_to/assets/media/audio/',
                        extension = '',
                        tracks = [
                                {"track":1,"name":"Happy Birthday Variation: In the style of Beethoven","length":"00:55","file":"01_Happy_Birthday_Variation_In_The"},
                                {"track":2,"name":"Wedding March Variation 1","length":"00:37","file":"02_Wedding_March_1"},
                                {"track":3,"name":"Happy Birthday Variation: In the style of Tango","length":"01:05","file":"03_Happy_Birthday_Variation_In_The"},
                                {"track":4,"name":"Wedding March Variation 2","length":"00:40","file":"04_Wedding_March_2"},
                                {"track":5,"name":"Random Classical","length":"00:59","file":"05_AFI_com"}
                        ],
                        trackCount = tracks.length,
                        npAction = $('#npAction'),
                        npTitle = $('#npTitle'),
                        audio = $('#audio1').bind('play', function() {
                                playing = true;
                                npAction.text('Now Playing:');
                        }).bind('pause', function() {
                                playing = false;
                                npAction.text('Paused:');
                        }).bind('ended', function() {
                                npAction.text('Paused:');
                                if((index + 1) < trackCount) {
                                        index++;
                                        loadTrack(index);
                                        audio.play();
                                } else {
                                        audio.pause();
                                        index = 0;
                                        loadTrack(index);
                                }
                        }).get(0),
                        btnPrev = $('#btnPrev').click(function() {
                                if((index - 1) > -1) {
                                        index--;
                                        loadTrack(index);
                                        if(playing) {
                                                audio.play();
                                        }
                                } else {
                                        audio.pause();
                                        index = 0;
                                        loadTrack(index);
                                }
                        }),
                        btnNext = $('#btnNext').click(function() {
                                if((index + 1) < trackCount) {
                                        index++;
                                        loadTrack(index);
                                        if(playing) {
                                                audio.play();
                                        }
                                } else {
                                        audio.pause();
                                        index = 0;
                                        loadTrack(index);
                                }
                        }),
                        li = $('#plUL li').click(function() {
                                var id = parseInt($(this).index());
                                if(id !== index) {
                                        playTrack(id);
                                }
                        }),
                        loadTrack = function(id) {
                                $('.plSel').removeClass('plSel');
                                $('#plUL li:eq(' + id + ')').addClass('plSel');
                                npTitle.text(tracks[id].name);
                                index = id;
                                audio.src = mediaPath + tracks[id].file + extension;
                        },
                        playTrack = function(id) {
                                loadTrack(id);
                                audio.play();
                        };
                        
                        extension = audio.canPlayType('audio/mpeg') ? '.mp3' : audio.canPlayType('audio/ogg') ? '.ogg' : '';

                        loadTrack(index);
                }

                $('#useLegend').click(function(e) {
                        e.preventDefault();
                        $('#use').slideToggle(300, function() {
                                $('#useSpanSpan').text(($('#use').css('display') == 'none' ? 'show' : 'hide'));
                        });
                });
        });
