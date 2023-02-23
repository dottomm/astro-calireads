export default function PrimaryButton({width,
    height,
    backgroundColor,
    padding,
    marginTop,
    color,
    border,
    borderColor,
    fontSize,
    buttonText,
    addText}) {
      return (
          <button style={{width, height, padding, marginTop, backgroundColor, color, border, borderColor, fontSize}}>
            {addText} {buttonText} 
          </button>
      )
  }

