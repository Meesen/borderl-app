<div style="max-width: 640px; margin: 0 auto; padding: 24px; background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); border: 1px solid #d1d9e1; border-radius: 10px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08); font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Roboto', sans-serif;">
    <h2 style="margin: 0 0 24px 0; font-size: 1.5rem; font-weight: 700; color: #1a1a1a; text-align: center; letter-spacing: -0.5px;">Event Pricing Summary</h2>
    
    <div style="display: flex; flex-direction: column; gap: 14px;">
        @forelse ($prices as $label => $amount)
            <div style="display: flex; justify-content: space-between; align-items: center; padding: 14px 16px; background: #fff; border: 1px solid #e5e7eb; border-radius: 8px; transition: all 0.2s ease;">
                <span style="font-weight: 600; color: #374151; font-size: 0.975rem; text-transform: capitalize; letter-spacing: 0.3px;">
                    {{ str_replace('_', ' ', $label) }}
                </span>
                <span style="font-weight: 700; color: #059669; font-size: 1.1rem; font-family: 'SF Mono', 'Monaco', 'Courier New', monospace;">
                    ${{ number_format($amount, 2) }}
                </span>
            </div>
        @empty
            <div style="padding: 20px; text-align: center; background: #f3f4f6; border-radius: 8px; color: #6b7280; font-size: 0.95rem;">
                No pricing data available
            </div>
        @endforelse
    </div>
    
</div>
