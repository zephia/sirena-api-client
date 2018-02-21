=begin
#Sirena API

#Sirena API for lead providers and prospect data manipulation

OpenAPI spec version: 1.5.0
Contact: it@getsirena.com
Generated by: https://github.com/swagger-api/swagger-codegen.git
Swagger Codegen version: 2.3.1

=end

require 'date'

module SwaggerClient
  # Lead data. Note that at least one contact channel (phone or email) **MUST** be provided (phone or email).
  class Lead
    # The source of the lead. It may be the name of the place where the lead was generated, or the name of the provider.
    attr_accessor :source

    # The campaign of the lead.
    attr_accessor :campaign

    # The contact medium where the lead came from
    attr_accessor :medium

    # The name/key to identify the provider of the lead
    attr_accessor :provider

    # The ID of the lead in the provider *(deprecated, use providerLrseadId)*
    attr_accessor :lead_id

    # The ID of the lead in the provider
    attr_accessor :provider_lead_id

    attr_accessor :first_name

    attr_accessor :last_name

    attr_accessor :phones

    attr_accessor :emails

    # The category of the lead. Use the Categories endpoint to see the available categories. If skipped, the default category is used.
    attr_accessor :category

    # Full street address
    attr_accessor :address

    # County / other sub-division of a locality, such as communes departments, etc
    attr_accessor :sub_locality

    # City / Municipality
    attr_accessor :locality

    # State / Province
    attr_accessor :region

    attr_accessor :country

    # Zip Code / Postal Code
    attr_accessor :zip_code

    # The URL of the listing page
    attr_accessor :listing_url

    # Any comments worth making to the agent, from the lead or from the acquisition channel.
    attr_accessor :comments

    # If the lead has an assigned company, indicate it's name or code. Usually, it's the name of the company under the general account
    attr_accessor :company

    # If the lead has an assigned store, indicate it's name or code. Usually is the name of the branch inside the company
    attr_accessor :store

    # If the lead has an assigned agent, indicate it's name or code
    attr_accessor :agent


    # Attribute mapping from ruby-style variable name to JSON key.
    def self.attribute_map
      {
        :'source' => :'source',
        :'campaign' => :'campaign',
        :'medium' => :'medium',
        :'provider' => :'provider',
        :'lead_id' => :'leadId',
        :'provider_lead_id' => :'providerLeadId',
        :'first_name' => :'firstName',
        :'last_name' => :'lastName',
        :'phones' => :'phones',
        :'emails' => :'emails',
        :'category' => :'category',
        :'address' => :'address',
        :'sub_locality' => :'subLocality',
        :'locality' => :'locality',
        :'region' => :'region',
        :'country' => :'country',
        :'zip_code' => :'zipCode',
        :'listing_url' => :'listingUrl',
        :'comments' => :'comments',
        :'company' => :'company',
        :'store' => :'store',
        :'agent' => :'agent'
      }
    end

    # Attribute type mapping.
    def self.swagger_types
      {
        :'source' => :'String',
        :'campaign' => :'String',
        :'medium' => :'String',
        :'provider' => :'String',
        :'lead_id' => :'String',
        :'provider_lead_id' => :'String',
        :'first_name' => :'String',
        :'last_name' => :'String',
        :'phones' => :'Array<String>',
        :'emails' => :'Array<String>',
        :'category' => :'String',
        :'address' => :'String',
        :'sub_locality' => :'String',
        :'locality' => :'String',
        :'region' => :'String',
        :'country' => :'String',
        :'zip_code' => :'String',
        :'listing_url' => :'String',
        :'comments' => :'String',
        :'company' => :'String',
        :'store' => :'String',
        :'agent' => :'String'
      }
    end

    # Initializes the object
    # @param [Hash] attributes Model attributes in the form of hash
    def initialize(attributes = {})
      return unless attributes.is_a?(Hash)

      # convert string to symbol for hash key
      attributes = attributes.each_with_object({}){|(k,v), h| h[k.to_sym] = v}

      if attributes.has_key?(:'source')
        self.source = attributes[:'source']
      end

      if attributes.has_key?(:'campaign')
        self.campaign = attributes[:'campaign']
      end

      if attributes.has_key?(:'medium')
        self.medium = attributes[:'medium']
      end

      if attributes.has_key?(:'provider')
        self.provider = attributes[:'provider']
      end

      if attributes.has_key?(:'leadId')
        self.lead_id = attributes[:'leadId']
      end

      if attributes.has_key?(:'providerLeadId')
        self.provider_lead_id = attributes[:'providerLeadId']
      end

      if attributes.has_key?(:'firstName')
        self.first_name = attributes[:'firstName']
      end

      if attributes.has_key?(:'lastName')
        self.last_name = attributes[:'lastName']
      end

      if attributes.has_key?(:'phones')
        if (value = attributes[:'phones']).is_a?(Array)
          self.phones = value
        end
      end

      if attributes.has_key?(:'emails')
        if (value = attributes[:'emails']).is_a?(Array)
          self.emails = value
        end
      end

      if attributes.has_key?(:'category')
        self.category = attributes[:'category']
      end

      if attributes.has_key?(:'address')
        self.address = attributes[:'address']
      end

      if attributes.has_key?(:'subLocality')
        self.sub_locality = attributes[:'subLocality']
      end

      if attributes.has_key?(:'locality')
        self.locality = attributes[:'locality']
      end

      if attributes.has_key?(:'region')
        self.region = attributes[:'region']
      end

      if attributes.has_key?(:'country')
        self.country = attributes[:'country']
      end

      if attributes.has_key?(:'zipCode')
        self.zip_code = attributes[:'zipCode']
      end

      if attributes.has_key?(:'listingUrl')
        self.listing_url = attributes[:'listingUrl']
      end

      if attributes.has_key?(:'comments')
        self.comments = attributes[:'comments']
      end

      if attributes.has_key?(:'company')
        self.company = attributes[:'company']
      end

      if attributes.has_key?(:'store')
        self.store = attributes[:'store']
      end

      if attributes.has_key?(:'agent')
        self.agent = attributes[:'agent']
      end

    end

    # Show invalid properties with the reasons. Usually used together with valid?
    # @return Array for valid properties with the reasons
    def list_invalid_properties
      invalid_properties = Array.new
      if @source.nil?
        invalid_properties.push("invalid value for 'source', source cannot be nil.")
      end

      if @first_name.nil?
        invalid_properties.push("invalid value for 'first_name', first_name cannot be nil.")
      end

      return invalid_properties
    end

    # Check to see if the all the properties in the model are valid
    # @return true if the model is valid
    def valid?
      return false if @source.nil?
      return false if @first_name.nil?
      return true
    end

    # Checks equality by comparing each attribute.
    # @param [Object] Object to be compared
    def ==(o)
      return true if self.equal?(o)
      self.class == o.class &&
          source == o.source &&
          campaign == o.campaign &&
          medium == o.medium &&
          provider == o.provider &&
          lead_id == o.lead_id &&
          provider_lead_id == o.provider_lead_id &&
          first_name == o.first_name &&
          last_name == o.last_name &&
          phones == o.phones &&
          emails == o.emails &&
          category == o.category &&
          address == o.address &&
          sub_locality == o.sub_locality &&
          locality == o.locality &&
          region == o.region &&
          country == o.country &&
          zip_code == o.zip_code &&
          listing_url == o.listing_url &&
          comments == o.comments &&
          company == o.company &&
          store == o.store &&
          agent == o.agent
    end

    # @see the `==` method
    # @param [Object] Object to be compared
    def eql?(o)
      self == o
    end

    # Calculates hash code according to all attributes.
    # @return [Fixnum] Hash code
    def hash
      [source, campaign, medium, provider, lead_id, provider_lead_id, first_name, last_name, phones, emails, category, address, sub_locality, locality, region, country, zip_code, listing_url, comments, company, store, agent].hash
    end

    # Builds the object from hash
    # @param [Hash] attributes Model attributes in the form of hash
    # @return [Object] Returns the model itself
    def build_from_hash(attributes)
      return nil unless attributes.is_a?(Hash)
      self.class.swagger_types.each_pair do |key, type|
        if type =~ /\AArray<(.*)>/i
          # check to ensure the input is an array given that the the attribute
          # is documented as an array but the input is not
          if attributes[self.class.attribute_map[key]].is_a?(Array)
            self.send("#{key}=", attributes[self.class.attribute_map[key]].map{ |v| _deserialize($1, v) } )
          end
        elsif !attributes[self.class.attribute_map[key]].nil?
          self.send("#{key}=", _deserialize(type, attributes[self.class.attribute_map[key]]))
        end # or else data not found in attributes(hash), not an issue as the data can be optional
      end

      self
    end

    # Deserializes the data based on type
    # @param string type Data type
    # @param string value Value to be deserialized
    # @return [Object] Deserialized data
    def _deserialize(type, value)
      case type.to_sym
      when :DateTime
        DateTime.parse(value)
      when :Date
        Date.parse(value)
      when :String
        value.to_s
      when :Integer
        value.to_i
      when :Float
        value.to_f
      when :BOOLEAN
        if value.to_s =~ /\A(true|t|yes|y|1)\z/i
          true
        else
          false
        end
      when :Object
        # generic object (usually a Hash), return directly
        value
      when /\AArray<(?<inner_type>.+)>\z/
        inner_type = Regexp.last_match[:inner_type]
        value.map { |v| _deserialize(inner_type, v) }
      when /\AHash<(?<k_type>.+?), (?<v_type>.+)>\z/
        k_type = Regexp.last_match[:k_type]
        v_type = Regexp.last_match[:v_type]
        {}.tap do |hash|
          value.each do |k, v|
            hash[_deserialize(k_type, k)] = _deserialize(v_type, v)
          end
        end
      else # model
        temp_model = SwaggerClient.const_get(type).new
        temp_model.build_from_hash(value)
      end
    end

    # Returns the string representation of the object
    # @return [String] String presentation of the object
    def to_s
      to_hash.to_s
    end

    # to_body is an alias to to_hash (backward compatibility)
    # @return [Hash] Returns the object in the form of hash
    def to_body
      to_hash
    end

    # Returns the object in the form of hash
    # @return [Hash] Returns the object in the form of hash
    def to_hash
      hash = {}
      self.class.attribute_map.each_pair do |attr, param|
        value = self.send(attr)
        next if value.nil?
        hash[param] = _to_hash(value)
      end
      hash
    end

    # Outputs non-array value in the form of hash
    # For object, use to_hash. Otherwise, just return the value
    # @param [Object] value Any valid value
    # @return [Hash] Returns the value in the form of hash
    def _to_hash(value)
      if value.is_a?(Array)
        value.compact.map{ |v| _to_hash(v) }
      elsif value.is_a?(Hash)
        {}.tap do |hash|
          value.each { |k, v| hash[k] = _to_hash(v) }
        end
      elsif value.respond_to? :to_hash
        value.to_hash
      else
        value
      end
    end

  end

end
