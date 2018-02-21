=begin
#Sirena API

#Sirena API for lead providers and prospect data manipulation

OpenAPI spec version: 1.5.0
Contact: it@getsirena.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.3.1

=end

require "uri"

module SwaggerClient
  class QuotesApi
    attr_accessor :api_client

    def initialize(api_client = ApiClient.default)
      @api_client = api_client
    end

    # 
    # Returns a filterable list of quotes related to a prospect
    # @param prospect_id The id of the prospect
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @option opts [String] :status The status to filter
    # @option opts [DateTime] :created_before The start date to filter quotes by their creation date
    # @option opts [DateTime] :created_after The end date to filter quotes by their creation date
    # @option opts [DateTime] :accepted_before The start date to filter quotes by their accepted date
    # @option opts [DateTime] :accepted_after The end date to filter quotes by their accepted date
    # @option opts [DateTime] :rejected_before The start date to filter quotes by their rejected date
    # @option opts [DateTime] :rejected_after The end date to filter quotes by their rejected date
    # @return [Quotes]
    def get_prospect_quotes(prospect_id, opts = {})
      data, _status_code, _headers = get_prospect_quotes_with_http_info(prospect_id, opts)
      return data
    end

    # 
    # Returns a filterable list of quotes related to a prospect
    # @param prospect_id The id of the prospect
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @option opts [String] :status The status to filter
    # @option opts [DateTime] :created_before The start date to filter quotes by their creation date
    # @option opts [DateTime] :created_after The end date to filter quotes by their creation date
    # @option opts [DateTime] :accepted_before The start date to filter quotes by their accepted date
    # @option opts [DateTime] :accepted_after The end date to filter quotes by their accepted date
    # @option opts [DateTime] :rejected_before The start date to filter quotes by their rejected date
    # @option opts [DateTime] :rejected_after The end date to filter quotes by their rejected date
    # @return [Array<(Quotes, Fixnum, Hash)>] Quotes data, response status code and response headers
    def get_prospect_quotes_with_http_info(prospect_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: QuotesApi.get_prospect_quotes ..."
      end
      # verify the required parameter 'prospect_id' is set
      if @api_client.config.client_side_validation && prospect_id.nil?
        fail ArgumentError, "Missing the required parameter 'prospect_id' when calling QuotesApi.get_prospect_quotes"
      end
      if @api_client.config.client_side_validation && prospect_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'prospect_id' when calling QuotesApi.get_prospect_quotes, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      if @api_client.config.client_side_validation && opts[:'format'] && !['csv', 'json'].include?(opts[:'format'])
        fail ArgumentError, 'invalid value for "format", must be one of csv, json'
      end
      if @api_client.config.client_side_validation && opts[:'status'] && !['pending', 'accepted', 'rejected'].include?(opts[:'status'])
        fail ArgumentError, 'invalid value for "status", must be one of pending, accepted, rejected'
      end
      # resource path
      local_var_path = "/prospect/{prospectId}/quotes".sub('{' + 'prospectId' + '}', prospect_id.to_s)

      # query parameters
      query_params = {}
      query_params[:'format'] = opts[:'format'] if !opts[:'format'].nil?
      query_params[:'status'] = opts[:'status'] if !opts[:'status'].nil?
      query_params[:'createdBefore'] = opts[:'created_before'] if !opts[:'created_before'].nil?
      query_params[:'createdAfter'] = opts[:'created_after'] if !opts[:'created_after'].nil?
      query_params[:'acceptedBefore'] = opts[:'accepted_before'] if !opts[:'accepted_before'].nil?
      query_params[:'acceptedAfter'] = opts[:'accepted_after'] if !opts[:'accepted_after'].nil?
      query_params[:'rejectedBefore'] = opts[:'rejected_before'] if !opts[:'rejected_before'].nil?
      query_params[:'rejectedAfter'] = opts[:'rejected_after'] if !opts[:'rejected_after'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json', 'text/csv', 'text/plain'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = nil
      auth_names = ['ApiKey', 'OAuth2']
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Quotes')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: QuotesApi#get_prospect_quotes\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # 
    # Returns a quote by its prospect and quote IDs
    # @param prospect_id The id of the prospect
    # @param quote_id The id of the quote
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Quote]
    def get_quote_by_id(prospect_id, quote_id, opts = {})
      data, _status_code, _headers = get_quote_by_id_with_http_info(prospect_id, quote_id, opts)
      return data
    end

    # 
    # Returns a quote by its prospect and quote IDs
    # @param prospect_id The id of the prospect
    # @param quote_id The id of the quote
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Array<(Quote, Fixnum, Hash)>] Quote data, response status code and response headers
    def get_quote_by_id_with_http_info(prospect_id, quote_id, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: QuotesApi.get_quote_by_id ..."
      end
      # verify the required parameter 'prospect_id' is set
      if @api_client.config.client_side_validation && prospect_id.nil?
        fail ArgumentError, "Missing the required parameter 'prospect_id' when calling QuotesApi.get_quote_by_id"
      end
      if @api_client.config.client_side_validation && prospect_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'prospect_id' when calling QuotesApi.get_quote_by_id, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      # verify the required parameter 'quote_id' is set
      if @api_client.config.client_side_validation && quote_id.nil?
        fail ArgumentError, "Missing the required parameter 'quote_id' when calling QuotesApi.get_quote_by_id"
      end
      if @api_client.config.client_side_validation && quote_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'quote_id' when calling QuotesApi.get_quote_by_id, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      if @api_client.config.client_side_validation && opts[:'format'] && !['csv', 'json'].include?(opts[:'format'])
        fail ArgumentError, 'invalid value for "format", must be one of csv, json'
      end
      # resource path
      local_var_path = "/prospect/{prospectId}/quote/{quoteId}".sub('{' + 'prospectId' + '}', prospect_id.to_s).sub('{' + 'quoteId' + '}', quote_id.to_s)

      # query parameters
      query_params = {}
      query_params[:'format'] = opts[:'format'] if !opts[:'format'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json', 'text/csv', 'text/plain'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = nil
      auth_names = ['ApiKey', 'OAuth2']
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Quote')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: QuotesApi#get_quote_by_id\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # 
    # Returns a filterable list of quotes
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @option opts [String] :status The status to filter
    # @option opts [DateTime] :created_before The start date to filter quotes by their creation date
    # @option opts [DateTime] :created_after The end date to filter quotes by their creation date
    # @option opts [DateTime] :accepted_before The start date to filter quotes by their accepted date
    # @option opts [DateTime] :accepted_after The end date to filter quotes by their accepted date
    # @option opts [DateTime] :rejected_before The start date to filter quotes by their rejected date
    # @option opts [DateTime] :rejected_after The end date to filter quotes by their rejected date
    # @return [Quotes]
    def get_quotes(opts = {})
      data, _status_code, _headers = get_quotes_with_http_info(opts)
      return data
    end

    # 
    # Returns a filterable list of quotes
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @option opts [String] :status The status to filter
    # @option opts [DateTime] :created_before The start date to filter quotes by their creation date
    # @option opts [DateTime] :created_after The end date to filter quotes by their creation date
    # @option opts [DateTime] :accepted_before The start date to filter quotes by their accepted date
    # @option opts [DateTime] :accepted_after The end date to filter quotes by their accepted date
    # @option opts [DateTime] :rejected_before The start date to filter quotes by their rejected date
    # @option opts [DateTime] :rejected_after The end date to filter quotes by their rejected date
    # @return [Array<(Quotes, Fixnum, Hash)>] Quotes data, response status code and response headers
    def get_quotes_with_http_info(opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: QuotesApi.get_quotes ..."
      end
      if @api_client.config.client_side_validation && opts[:'format'] && !['csv', 'json'].include?(opts[:'format'])
        fail ArgumentError, 'invalid value for "format", must be one of csv, json'
      end
      if @api_client.config.client_side_validation && opts[:'status'] && !['pending', 'accepted', 'rejected'].include?(opts[:'status'])
        fail ArgumentError, 'invalid value for "status", must be one of pending, accepted, rejected'
      end
      # resource path
      local_var_path = "/prospects/quotes"

      # query parameters
      query_params = {}
      query_params[:'format'] = opts[:'format'] if !opts[:'format'].nil?
      query_params[:'status'] = opts[:'status'] if !opts[:'status'].nil?
      query_params[:'createdBefore'] = opts[:'created_before'] if !opts[:'created_before'].nil?
      query_params[:'createdAfter'] = opts[:'created_after'] if !opts[:'created_after'].nil?
      query_params[:'acceptedBefore'] = opts[:'accepted_before'] if !opts[:'accepted_before'].nil?
      query_params[:'acceptedAfter'] = opts[:'accepted_after'] if !opts[:'accepted_after'].nil?
      query_params[:'rejectedBefore'] = opts[:'rejected_before'] if !opts[:'rejected_before'].nil?
      query_params[:'rejectedAfter'] = opts[:'rejected_after'] if !opts[:'rejected_after'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json', 'text/csv', 'text/plain'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = nil
      auth_names = ['ApiKey', 'OAuth2']
      data, status_code, headers = @api_client.call_api(:GET, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Quotes')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: QuotesApi#get_quotes\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # 
    # Create quote for prospect
    # @param prospect_id The id of the prospect
    # @param quote 
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Quote]
    def new_prospect_quote(prospect_id, quote, opts = {})
      data, _status_code, _headers = new_prospect_quote_with_http_info(prospect_id, quote, opts)
      return data
    end

    # 
    # Create quote for prospect
    # @param prospect_id The id of the prospect
    # @param quote 
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Array<(Quote, Fixnum, Hash)>] Quote data, response status code and response headers
    def new_prospect_quote_with_http_info(prospect_id, quote, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: QuotesApi.new_prospect_quote ..."
      end
      # verify the required parameter 'prospect_id' is set
      if @api_client.config.client_side_validation && prospect_id.nil?
        fail ArgumentError, "Missing the required parameter 'prospect_id' when calling QuotesApi.new_prospect_quote"
      end
      if @api_client.config.client_side_validation && prospect_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'prospect_id' when calling QuotesApi.new_prospect_quote, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      # verify the required parameter 'quote' is set
      if @api_client.config.client_side_validation && quote.nil?
        fail ArgumentError, "Missing the required parameter 'quote' when calling QuotesApi.new_prospect_quote"
      end
      if @api_client.config.client_side_validation && opts[:'format'] && !['csv', 'json'].include?(opts[:'format'])
        fail ArgumentError, 'invalid value for "format", must be one of csv, json'
      end
      # resource path
      local_var_path = "/prospect/{prospectId}/quotes".sub('{' + 'prospectId' + '}', prospect_id.to_s)

      # query parameters
      query_params = {}
      query_params[:'format'] = opts[:'format'] if !opts[:'format'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json', 'text/csv', 'text/plain'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(quote)
      auth_names = ['ApiKey', 'OAuth2']
      data, status_code, headers = @api_client.call_api(:POST, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Quote')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: QuotesApi#new_prospect_quote\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end

    # 
    # Update quote for prospect by prospect and quote IDs
    # @param prospect_id The id of the prospect
    # @param quote_id The id of the quote
    # @param quote 
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Quote]
    def update_prospect_quote(prospect_id, quote_id, quote, opts = {})
      data, _status_code, _headers = update_prospect_quote_with_http_info(prospect_id, quote_id, quote, opts)
      return data
    end

    # 
    # Update quote for prospect by prospect and quote IDs
    # @param prospect_id The id of the prospect
    # @param quote_id The id of the quote
    # @param quote 
    # @param [Hash] opts the optional parameters
    # @option opts [String] :format An optional flag to force a response format. Note that the API also supports content negotiation and honors the Accept header.
    # @return [Array<(Quote, Fixnum, Hash)>] Quote data, response status code and response headers
    def update_prospect_quote_with_http_info(prospect_id, quote_id, quote, opts = {})
      if @api_client.config.debugging
        @api_client.config.logger.debug "Calling API: QuotesApi.update_prospect_quote ..."
      end
      # verify the required parameter 'prospect_id' is set
      if @api_client.config.client_side_validation && prospect_id.nil?
        fail ArgumentError, "Missing the required parameter 'prospect_id' when calling QuotesApi.update_prospect_quote"
      end
      if @api_client.config.client_side_validation && prospect_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'prospect_id' when calling QuotesApi.update_prospect_quote, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      # verify the required parameter 'quote_id' is set
      if @api_client.config.client_side_validation && quote_id.nil?
        fail ArgumentError, "Missing the required parameter 'quote_id' when calling QuotesApi.update_prospect_quote"
      end
      if @api_client.config.client_side_validation && quote_id !~ Regexp.new(/^[a-z0-9]{24}$/)
        fail ArgumentError, "invalid value for 'quote_id' when calling QuotesApi.update_prospect_quote, must conform to the pattern /^[a-z0-9]{24}$/."
      end

      # verify the required parameter 'quote' is set
      if @api_client.config.client_side_validation && quote.nil?
        fail ArgumentError, "Missing the required parameter 'quote' when calling QuotesApi.update_prospect_quote"
      end
      if @api_client.config.client_side_validation && opts[:'format'] && !['csv', 'json'].include?(opts[:'format'])
        fail ArgumentError, 'invalid value for "format", must be one of csv, json'
      end
      # resource path
      local_var_path = "/prospect/{prospectId}/quote/{quoteId}".sub('{' + 'prospectId' + '}', prospect_id.to_s).sub('{' + 'quoteId' + '}', quote_id.to_s)

      # query parameters
      query_params = {}
      query_params[:'format'] = opts[:'format'] if !opts[:'format'].nil?

      # header parameters
      header_params = {}
      # HTTP header 'Accept' (if needed)
      header_params['Accept'] = @api_client.select_header_accept(['application/json', 'text/csv', 'text/plain'])
      # HTTP header 'Content-Type'
      header_params['Content-Type'] = @api_client.select_header_content_type(['application/json'])

      # form parameters
      form_params = {}

      # http body (model)
      post_body = @api_client.object_to_http_body(quote)
      auth_names = ['ApiKey', 'OAuth2']
      data, status_code, headers = @api_client.call_api(:PUT, local_var_path,
        :header_params => header_params,
        :query_params => query_params,
        :form_params => form_params,
        :body => post_body,
        :auth_names => auth_names,
        :return_type => 'Quote')
      if @api_client.config.debugging
        @api_client.config.logger.debug "API called: QuotesApi#update_prospect_quote\nData: #{data.inspect}\nStatus code: #{status_code}\nHeaders: #{headers}"
      end
      return data, status_code, headers
    end
  end
end
