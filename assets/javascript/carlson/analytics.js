
	        CQ_Analytics.registerAfterCallback(function(options) {
	            if(!options.compatibility && $CQ.inArray( options.componentPath, CQ_Analytics.Sitecatalyst.frameworkComponents) < 0 )
	                return false;    // component not in framework, skip SC callback
	            CQ_Analytics.Sitecatalyst.saveEvars();
	            CQ_Analytics.Sitecatalyst.updateEvars(options);
	            CQ_Analytics.Sitecatalyst.updateLinkTrackVars();
	            return false;
	        }, 10);
	
	        CQ_Analytics.registerAfterCallback(function(options) {
	            if(!options.compatibility && $CQ.inArray( options.componentPath, CQ_Analytics.Sitecatalyst.frameworkComponents) < 0 )
	                return false;    // component not in framework, skip SC callback
	            s = s_gi("carlsoncwtglobal1,carlsonwagonlitcom");
	            if (s.linkTrackVars == "None") {
	                s.linkTrackVars = "events";
	            } else {
	                s.linkTrackVars = s.linkTrackVars + ",events";
	            }
	            CQ_Analytics.Sitecatalyst.trackLink(options);
	            return false;
	        }, 100);
	
	
	        CQ_Analytics.registerAfterCallback(function(options) {
	            if(!options.compatibility && $CQ.inArray( options.componentPath, CQ_Analytics.Sitecatalyst.frameworkComponents) < 0 )
	                return false;    // component not in framework, skip SC callback
	            CQ_Analytics.Sitecatalyst.restoreEvars();
	            return false;
	        }, 200);
	
	        CQ_Analytics.adhocLinkTracking = "false";
	        
	
	
	        var s_account = "carlsoncwtglobal1,carlsonwagonlitcom";
	        var s = s_gi(s_account);
	        s.fpCookieDomainPeriods = "2";
	        s.currencyCode= 'USD';
        s.trackInlineStats= true;
        s.linkTrackVars= 'None';
        s.charSet= 'UTF-8';
        s.linkLeaveQueryString= false;
        s.linkExternalFilters= '';
        s.linkTrackEvents= 'None';
        s.linkDownloadFileTypes= 'exe,zip,wav,mp3,mov,mpg,avi,wmv,doc,pdf,xls';
        s.trackExternalLinks= true;
        s.linkInternalFilters= 'javascript:,'+window.location.hostname;
        s.trackDownloadLinks= true;
        
        s.visitorNamespace = "carlson";
        s.trackingServer = "carlsoncwtglobal1.112.2o7.net";
        s.trackingServerSecure = "carlsoncwtglobal1.112.2o7.net";
        
        var findDeviceWidth = $(window).width();
if(findDeviceWidth >= 320 && findDeviceWidth <= 699) {s.prop30 = 'mobile';s.evar21 = 'mobile';}else if (findDeviceWidth > 699 &&findDeviceWidth <= 1021) {s.prop30 = 'tablet';s.evar21 = 'tablet';} else if (findDeviceWidth > 1021) {s.prop30 = 'desktop';s.evar21 = 'desktop';}



